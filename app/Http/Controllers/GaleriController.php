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
        $galeris = Galeri::all();
        return view('galeri.index', compact('galeris'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('galeri.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_galeri'=>'required',
            'foto'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        Galeri::create($request->all());
        return redirect()->route('galeri.index')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Galeri $galeri)
    {
        return view('galeri.show', compact('galeri'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Galeri $galeri)
    {
        return view('galeri.edit', compact('galeri'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Galeri $galeri)
    {
        $request->validate([
            'nama_galeri'=>'required',
            'foto'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $galeri->update($request->all());
        return redirect()->route('galeri.index')->with('success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Galeri $galeri)
    {
        $galeri->delete();
        return redirect()->route('galeri.index')->with('success', 'Data Berhasil Dihapus');
    }
}
