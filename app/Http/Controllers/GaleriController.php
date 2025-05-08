<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        //
        $galeri = Galeri::all();
        return view('backend.galeri.galeri',compact('galeri'),[
            'title' => 'Galeri'
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        //
        return view('backend.galeri.crudgaleri.create',[
            'title' => 'Tambah Data Galeri'
        ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        //
        $request->validate([
            'nama_galeri' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $gambarPath = null;
        if ($request->hasFile('foto')) {
            $gambarPath = $request->file('foto')->store('galeri_foto', 'public');
        }

        Galeri::create([
            'nama_galeri' => $request->nama_galeri,
            'foto' => $gambarPath
        ]);

        return redirect()->route('galeris.index')->with('success', 'Data galeri berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     */
    public function show(Galeri $galeri)
    {

        //
        return view('backend.galeri.crudgaleri.show',compact('galeri'),[
            'title' => 'Show Data Galeri'
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Galeri $galeri)
    {

        //
        return view('backend.galeri.crudgaleri.edit',compact('galeri'),[
            'title' => 'Edit Data Galeri'
        ]);


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Galeri $galeri)
    {

        //
        $request->validate([
            'nama_galeri' => 'required|string|max:255',
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('foto')) {
            $gambarPath = $request->file('foto')->store('galeri_foto', 'public');
            $galeri->foto = $gambarPath;
        }

        $galeri->update([
            'nama_galeri' => $request->nama_galeri,
        ]);
        return redirect()->route('galeris.index')->with('success', 'Data galeri berhasil diperbarui');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Galeri $galeri)
    {

        // Hapus gambar jika ada
        if ($galeri->foto) {
            $gambarPath = storage_path('app/public/' . $galeri->foto);
            if (file_exists($gambarPath)) {
                unlink($gambarPath);
            }
        }

        // Hapus data program dari database
        $galeri->delete();

        return redirect()->route('galeris.index')->with('success', 'Data galeri dan gambar berhasil dihapus.');

    }
}
