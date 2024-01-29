<?php

namespace App\Http\Controllers;

use App\Models\Entry;
use App\Models\Outlet;
use Illuminate\Http\Request;

class StockController extends Controller
{
    
    public function indexStockIn() {
        return view('pages.stock-in');
    }

    public function storeStockIn( Request $request ) {

        $request->validate([
            'name'     => 'required',
            'quantity' => 'required|numeric',
            'data_in'  => 'required',
            'price'    => 'required|numeric',
        ]);

        if ($request->quantity < 1) return back()->withErrors('Quantidade de produtos deve ser maior que zero!');

        $stockInObject = new Entry;
        $stockInObject->product_name = $request->name;
        $stockInObject->quantity = $request->quantity;
        $stockInObject->entry_date = $request->data_in;
        $stockInObject->price =$request->price;
        $stockInObject->supplier = $request->supplier;
        $stockInObject->user_id = 1;
        if ($stockInObject->save()) {
            return back()->with('message', 'Produto registado com sucesso');
        }

        return back()->withErrors('Ocorreu um problema ao inserir o produto');
    }

    public function stockInView() {

        $entries = Entry::where('quantity', '>', 0)->get();
        return view('pages.stock-in-view', [
            'entries' => $entries
        ]);
    }

    public function updateProduct( Request $request, $id ) {

        $request->validate([
            'name'     => 'required',
            'quantity' => 'required|numeric',
            'data_in'  => 'required',
            'price'    => 'required|numeric',
        ]);

        $stockInObject = Entry::findOrFail($id);
        $stockInObject->product_name = $request->name ?? $stockInObject->product_name;
        $stockInObject->quantity = $request->quantity ?? $stockInObject->quantity;
        $stockInObject->entry_date = $request->data_in ?? $stockInObject->entry_date;
        $stockInObject->price =$request->price ?? $stockInObject->price;
        $stockInObject->supplier = $request->supplier ?? $stockInObject->supplier;
        if ($stockInObject->save()) {
            return back()->with('message', 'Produto actualizado com sucesso');
        }

        return back()->with('message', 'Ocorreu um problema ao actualizar produto');
    }

    public function deleteEntry( $id ) {

        if (Entry::findOrFail($id)->delete()) {
            return back()->with('message', 'Produto deletado com sucesso');
        }

        return back()->with('message', 'Ocorreu um problema ao excluir produto');
    }

    public function indexStockOut() {
        $entries = Entry::where('quantity', '>', 0)->get();

        return view('pages.stock-out', [
            'entries' => $entries
        ]);
    }

    public function deduce( Request $request ) {

        $request->validate([
            'product' => 'required',
            'quantity' => 'required|numeric'
        ]);

        if ($request->quantity < 1) return back()->withErrors('Quantidade de produtos a deduzir deve ser maior que 0');
        $entry = Entry::findOrFail($request->product);

        if ($entry->quantity < $request->quantity) return back()->withErrors('Quantidade requerida indisponivel!');

        $outlet = new Outlet;
        $outlet->quantity = $request->quantity;
        $outlet->leftover = $entry->quantity - $request->quantity;
        $outlet->entry_id = $entry->id;
        $outlet->user_id = 1;
        if ($outlet->save()) {
            $entry->quantity = $entry->quantity - $request->quantity;
            $entry->save();
            return back()->with('message', 'Saída registrada com sucesso.');
        }

        return back()->withErrors('Ocorreu um problema ao registar a saída!');
    }

    public function stockOutView() {
        $outlets = Outlet::with('entry')->get();

        return view('pages.stock-out-view', [
            'outlets' => $outlets
        ]);
    }

}