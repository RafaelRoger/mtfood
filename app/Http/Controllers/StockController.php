<?php

namespace App\Http\Controllers;

use App\Models\Entry;
use App\Models\Outlet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StockController extends Controller
{

    public function indexStockIn()
    {

        // AUTHORIZATION
        $this->authorize('admin');

        return view('pages.stock-in');
    }

    public function storeStockIn(Request $request)
    {
        // AUTHORIZATION
        $this->authorize('admin');

        $request->validate([
            'name' => 'required',
            'quantity' => 'required|numeric',
            'data_in' => 'required',
            'price' => 'required|numeric',
        ]);

        if ($request->quantity < 1)
            return back()->withErrors('Quantidade de produtos deve ser maior que zero!');

        $stockInObject = new Entry;
        $stockInObject->product_name = $request->name;
        $stockInObject->quantity = $request->quantity;
        $stockInObject->entry_date = $request->data_in;
        $stockInObject->price = $request->price;
        $stockInObject->supplier = $request->supplier;
        $stockInObject->user_id = Auth::user()->id;
        if ($stockInObject->save()) {
            return back()->with('message', 'Produto registado com sucesso');
        }

        return back()->withErrors('Ocorreu um problema ao inserir o produto');
    }

    public function stockInView()
    {

        $entries = Entry::where('quantity', '>', 0)->get();
        return view('pages.stock-in-view', [
            'entries' => $entries
        ]);
    }

    public function updateProduct(Request $request, $id)
    {

        $request->validate([
            'name' => 'required',
            'quantity' => 'required|numeric',
            'data_in' => 'required',
            'price' => 'required|numeric',
        ]);


        $stockInObject = Entry::findOrFail($id);
        $stockInObject->product_name = $request->name ?? $stockInObject->product_name;
        $stockInObject->quantity = $request->quantity ?? $stockInObject->quantity;
        $stockInObject->entry_date = $request->data_in ?? $stockInObject->entry_date;
        $stockInObject->price = $request->price ?? $stockInObject->price;
        $stockInObject->supplier = $request->supplier ?? $stockInObject->supplier;
        if ($stockInObject->save()) {
            return back()->with('message', 'Produto actualizado com sucesso');
        }

        return back()->with('message', 'Ocorreu um problema ao actualizar produto');
    }

    public function deleteEntry($id)
    {

        if (Entry::findOrFail($id)->delete()) {
            return back()->with('message', 'Produto deletado com sucesso');
        }

        return back()->with('message', 'Ocorreu um problema ao excluir produto');
    }

    public function soldOut() {
        $entries = Entry::where('quantity', 0)->get();

        return view('pages.sold-out', [
            'entries' => $entries
        ]);
    }

    public function addQuantity( Request $request, $id ) {

        $this->authorize('admin');

        $request->validate([
            'quantity' => 'required|numeric'
        ]);

        $entry = Entry::findOrFail($id);

        $entry->quantity = $request->quantity + $entry->quantity;
        $entry->save();

        return redirect()->back()->with('message', 'Quantidades adicionadas com sucesso.');
    }

    public function indexStockOut()
    {
        $entries = Entry::where('quantity', '>', 0)->get();
        $products = session()->get('products', []);

        return view('pages.stock-out', [
            'entries' => $entries,
            'products' => $products
        ]);
    }

    public function deduce()
    {
        $products = session()->get('products', []);
        session()->put('invoice', $products);

        foreach ($products as $product) {

            $entry = Entry::findOrFail($product['product_id']);

            $outlet = new Outlet;
            $outlet->quantity = $product['quantity'];
            $outlet->leftover = $entry->quantity - $product['quantity'];
            $outlet->entry_id = $entry->id;
            $outlet->user_id = Auth::user()->id;
            if ($outlet->save()) {
                $entry->quantity = $entry->quantity - $product['quantity'];
                $entry->save();
            }
        }

        session()->put('products', []);

        return redirect()->route('admin.invoice');
    }

    public function addOnList(Request $request)
    {

        $request->validate([
            'product' => 'required',
            'quantity' => 'required|numeric'
        ]);

        if ($request->quantity < 1)
            return back()->withErrors('Quantidade de produtos a deduzir deve ser maior que 0');
        $entry = Entry::findOrFail($request->product);

        if ($entry->quantity < $request->quantity)
            return back()->withErrors('Quantidade requerida indisponivel!');

        $products = session()->get('products', []);

        if (!empty($products)) {
            $sum_quantities = 0;
            foreach ($products as $product) {
                if ($product["product_name"] == $entry->product_name) {
                    $sum_quantities += intval($product["quantity"]);
                }
            }

            if (($sum_quantities + $request->quantity) > $entry->quantity)
                return back()->withErrors('Você já deduziu ' . $sum_quantities . ' quantidades de ' . $entry->product_name . ' restam apenas ' . ($entry->quantity - $sum_quantities));
            ;
        }

        $product = [
            'product_id' => $entry->id,
            'product_name' => $entry->product_name,
            'quantity' => $request->quantity,
            'unity_price' => $entry->price,
            'amount' => ($entry->price * $request->quantity),
            'supplier' => $entry->supplier
        ];

        $products[] = $product;

        session()->put('products', $products);

        return back()->with('message', 'Produto adicionado a lista, você pode adicionar outro antes de finalizar!');
    }

    public function emptyList()
    {
        session()->put('products', []);
        return redirect()->back();
    }

    public function removeProduct($id)
    {

        $products = session()->get('products', []);

        unset($products[$id]);

        session()->put('products', $products);

        return redirect()->back();
    }

    public function stockOutView()
    {
        $outlets = Outlet::with('entry')->orderByDesc('id')->get();

        return view('pages.stock-out-view', [
            'outlets' => $outlets
        ]);
    }

    public function invoice()
    {
        $products = session()->get('invoice', []);

        $total = 0;
        foreach ($products as $product) {
            $total += intval($product['amount']);
        }

        session()->put('invoice', []);
        return view('pages.invoice', [
            'products' => $products,
            'total' => $total
        ]);
    }

    public function downloadInvoice( $id ) {

        $outlet = Outlet::with('entry')->findOrFail($id);
        $products = session()->get('invoice', []);

        $product = [
            'product_id' => $outlet->entry->id,
            'product_name' => $outlet->entry->product_name,
            'quantity' => $outlet->quantity,
            'unity_price' => $outlet->entry->price,
            'amount' => ($outlet->entry->price * $outlet->quantity),
            'supplier' => $outlet->entry->supplier
        ];

        $products[] = $product;

        session()->put('invoice', $products);

        return redirect()->route('admin.invoice');
    }

}