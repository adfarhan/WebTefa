<?php

namespace App\Http\Controllers;

use App\Models\Misi;
use App\Models\Visi;
use Illuminate\Http\Request;

class MisiController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        $visi = Visi::all();
        return view('backend.beranda.misidanvisi', compact('visi'),[
            'title'=> 'Tambah Data Misi'
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'misi' => 'required',
            'visi_id' => 'required|exists:visis,id'
        ]);

        Misi::create($request->all());
        return redirect()->route('visi.misi')->with('success', 'Misi berhasil ditambahkan.');
    }

    public function show(Misi $misi)
    {
        $visi = Visi::all();
        return view('backend.beranda.crudmisi.show', compact('misi', 'visi'),[
            'title' => 'Show Data Misi Visi'
        ]);
    }
    
    public function edit(Misi $misi)
    {
        $visi = Visi::all(); // Ambil semua visi untuk dropdown

        return view('backend.beranda.crudmisi.edit', compact('misi', 'visi'), [
            'title' => 'Edit Data Misi'
        ]);
    }



    public function update(Request $request, Misi $misi)
    {
        $request->validate([
            'misi' => 'required',
            'visi_id' => 'required|exists:visis,id'
        ]);

        $misi->update($request->all());
        return redirect()->route('visi.misi')->with('success', 'Misi berhasil diperbarui.');
    }

    public function destroy(Misi $misi)
    {
        $misi->delete();
        return redirect()->route('visi.misi')->with('success', 'Misi berhasil dihapus.');
    }
}
