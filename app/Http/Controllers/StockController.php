<?php

namespace App\Http\Controllers;

use App\Models\Entry;
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

        $entries = Entry::get();
        return view('pages.stock-in-view', [
            'entries' => $entries
        ]);
    }

    public function deleteEntry( $id ) {

        if (Entry::findOrFail($id)->delete()) {
            return back()->with('message', 'Produto deletado com sucesso');
        }

        return back()->with('message', 'Ocorreu um problema ao excluir produto');
    }

    public function indexStockOut() {
        return view('pages.stock-out');
    }

    public function stockOutView() {
        return view('pages.stock-out-view');
    }

}