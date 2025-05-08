<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index()
    {
        $kontaks = Kontak::all();
        return view('backend.medsos.media', compact('kontaks'),[
            'title' => 'Media Sosial'
        ]);
    }

    public function create()
    {
        return view('backend.medsos.create',[
            'title' => 'Tambah Data Medsos'
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'nomor_telepon' => 'required',
            'instagram' => 'required',
            'facebook' => 'required',
            'twitter' => 'required',
            'tiktok' => 'required',
            'youtube' => 'required',
        ]);

        Kontak::create($request->all());

        return redirect()->route('kontaks.index')->with('success', 'Kontak berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $kontak = Kontak::findOrFail($id);
        return view('backend.medsos.edit', compact('kontak'),[
            'title' => 'Edit Medsos'
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'nomor_telepon' => 'required',
            'instagram' => 'required',
            'facebook' => 'required',
            'twitter' => 'required',
            'tiktok' => 'required',
            'youtube' => 'required',
        ]);

        $kontak = Kontak::findOrFail($id);
        $kontak->update($request->all());

        return redirect()->route('kontaks.index')->with('success', 'Kontak berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $kontak = Kontak::findOrFail($id);
        $kontak->delete();

        return redirect()->route('kontaks.index')->with('success', 'Kontak berhasil dihapus.');
    }
}
