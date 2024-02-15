<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index() {
        $data = Produk::all();
        return view('produk', compact('data'));
    }

    public function tambah() {
        return view('tambah');
    }

    public function store(Request $request) {
        Produk::create([
            'name'=>$request->name,
            'product_type'=>$request->product_type,
            'total'=>$request->total
        ]);
        return redirect()->route('produk');
    }

    public function destroy(int $id) {
        Produk::where('id', $id)->delete();
        return redirect()->route('produk');
    }



    public function edit(int $id) {
        $data = Produk::where('id', $id)->first();
        return view('edit', compact('data', 'id'));
    }

    public function update(Request $request, int $id) {
        Produk::where('id', $id)->update([
            'name'=>$request->name,
            'product_type'=>$request->product_type,
            'total'=>$request->total
        ]);
        return redirect()->route('produk');
    }
}
