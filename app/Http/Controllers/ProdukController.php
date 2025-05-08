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
        $produk = Produk::all();
        return view('backend.proja.produk', compact('produk'),[
            'title' => 'Produk & Jasa'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.proja.crudproduk.create',[
            'title' => 'Edit Data Produk'
        ]);
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
            'gambar_slide.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048' // Untuk gambar tambahan
        ]);

        // Simpan gambar utama
        $gambarPath = null;
        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('gambar_produk', 'public');
        }

        // Simpan produk
        $produk = Produk::create([
            'kode_produk' => $request->kode_produk,
            'nama_produk' => $request->nama_produk,
            'gambar' => $gambarPath,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga
        ]);

        // Simpan gambar tambahan (jika ada)
        if ($request->hasFile('gambar_slide')) {
            foreach ($request->file('gambar_slide') as $slide) {
                $pathSlide = $slide->store('gambar_produk', 'public');
                // Simpan ke tabel produk_gambars
                $produk->gambars()->create([
                    'path_gambar' => $pathSlide,
                ]);
            }
        }

        return redirect()->route('produk.index')->with('success', 'Produk Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(Produk $produk)
    {
        return view('backend.proja.crudproduk.show', compact('produk'),[
            'title' => 'Show Data Produk'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produk $produk)
    {
        return view('backend.proja.crudproduk.edit', compact('produk'),[
            'title' => 'Edit Data Produk'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produk $produk)
    {
        $request->validate([
            'kode_produk'=>'required|max:10',
            'nama_produk'=>'required',
            'gambar'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deskripsi'=>'required',
            'harga'=>'required|numeric',
        ]);

        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('gambar_produk', 'public');
            $produk->foto = $gambarPath;
        }

        $produk->update([
            'kode_produk' => $request->kode_produk,
            'nama_produk' => $request->nama_produk,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
        ]);
        return redirect()->route('produk.index')->with('success', 'Produk Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produk $produk)
    {
        if ($produk->gambar) {
            $gambarPath = storage_path('app/public/' . $produk->gambar);
            if (file_exists($gambarPath)) {
                unlink($gambarPath);
            }
        }

        $produk->delete();
        return redirect()->route('produk.index')->with('success', 'Produk Berhasil Dihapus');
    }

    public function showUser(Produk $produk)
    {
        return view('detail.detailproduk', compact('produk'),[
            'title' => 'Show Data Produk'
        ]);
    }
}
