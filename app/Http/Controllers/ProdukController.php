<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produks = Produk::all();
        return view('produk.index', compact('prosuks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_produk'=>'required|max:10',
            'nama_produk'=>'required',
            'gambar'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deskripsi'=>'required',
            'harga'=>'required|numeric',
        ]);
        Produk::create($request->all());
        return redirect()->route('produk.index')->with('success', 'Produk Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(Produk $produk)
    {
        return view('produk.show', compact('produk'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produk $produk)
    {
        return view('produk.edit', compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produk $produk)
    {
        $request->validate([
            'kode_produk'=>'required|max:10',
            'nama_produk'=>'required',
            'gambar'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deskripsi'=>'required',
            'harga'=>'required|numeric',
        ]);
        $produk->update($request->all());
        return redirect()->route('produk.index')->with('success', 'Produk Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produk $produk)
    {
        $produk->delete();
        return redirect()->route('produk.index')->with('success', 'Produk Berhasil Dihapus');
    }
}
