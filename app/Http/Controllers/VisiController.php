<?php

namespace App\Http\Controllers;

use App\Models\Visi;
use Illuminate\Http\Request;

class VisiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.beranda.misidanvisi',[
            'title' => 'Tambah Data Visi'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'visi' => 'required',
        ]);

        Visi::create([
            'visi' => $request->visi
        ]);

        return redirect()->route('visi.misi')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Visi $visi)
    {
        //
        return view('backend.beranda.crudvisi.show', compact('visi'),[
            'title' => 'Show Data Visi'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Visi $visi)
    {
        //
        return view('backend.beranda.crudvisi.edit', compact('visi'),[
            'title' => 'Edit Data Visi'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Visi $visi)
    {
        //
        $request->validate([
            'visi' => 'required',
        ]);
        $visi->update($request->all());
        return redirect()->route('visi.misi')->with('success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Visi $visi)
    {
        //
        $visi->delete();
        return redirect()->route('visi.misi')->with('success', 'Data Berhasil Dihapus');
    }
}
