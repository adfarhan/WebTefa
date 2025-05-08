<?php

namespace App\Http\Controllers;

use App\Models\Keunggulan;
use Illuminate\Http\Request;

class KeunggulanController extends Controller
{
    //
    public function index()
    {
        $keunggulan = Keunggulan::all();
        return view('backend.beranda.keunggulan', compact('keunggulan'),[
            'title' => 'keunggulan'
        ]);
    }

    public function create()
    {
        return view('backend.beranda.crudkeunggulan.create',[
            'title' => 'Tambah Data keunggulan']);
    }

    public function store(Request $request)
    {
        $request->validate([
            'icon' => 'required',
            'nama_keunggulan' => 'required',
            'isi' => 'required',
        ]);

        Keunggulan::create($request->all());
        return redirect()->route('keunggulan.index')->with('success', 'keunggulan berhasil ditambahkan.');
    }

    public function edit(Keunggulan $keunggulan)
    {
        return view('backend.beranda.crudkeunggulan.edit', compact('keunggulan'));
    }

    public function update(Request $request, Keunggulan $keunggulan)
    {
        $request->validate([
            'icon' => 'required',
            'nama_keunggulan' => 'required',
            'isi' => 'required',
        ]);

        $keunggulan->update($request->all());
        return redirect()->route('keunggulan.index')->with('success', 'keunggulan berhasil diupdate.');
    }

    public function destroy(Keunggulan $keunggulan)
    {
        $keunggulan->delete();
        return redirect()->route('keunggulan.index')->with('success', 'keunggulan berhasil dihapus.');
    }
}
