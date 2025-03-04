<?php

namespace App\Http\Controllers;

use App\Models\Beranda;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $berandas = Beranda::all();
        return view('beranda.index', compact('berandas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('beranda.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'gambaran_umum'=>'required',
            'keunggulan'=>'required',
            'manfaat'=>'required',
        ]);
        Beranda::create($request->all());
        return redirect()->route('beranda.index')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Beranda $beranda)
    {
        return view('beranda.show', compact('beranda'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Beranda $beranda)
    {
        return view('beranda.edit', compact('beranda'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Beranda $beranda)
    {
        $request->validate([
            'gambaran_umum'=>'required',
            'keunggulan'=>'required',
            'manfaat'=>'required',
        ]);
        $beranda->update($request->all());
        return redirect()->route('beranda.index')->with('success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Beranda $beranda)
    {
        $beranda->delete();
        return redirect()->route('beranda.index')->with('success', 'Data Berhasil Dihapus');
    }
}
