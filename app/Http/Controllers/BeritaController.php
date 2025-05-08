<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    public function index()
    {
        $beritas = Berita::with('user')->latest()->get();
        return view('backend.berita.berita', compact('beritas'), [
            'title' => 'Berita'
        ]);
    }

    public function create()
    {
        return view('backend.berita.crudberita.create', [
            'title' => 'Tambah Data Berita'
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul_berita' => 'required',
            'tanggal_berita' => 'required|date',
            'isi_berita' => 'required',
            'gambar_berita' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $gambar = $request->hasFile('gambar_berita')
            ? $request->file('gambar_berita')->store('berita', 'public')
            : null;

        Berita::create([
            'judul_berita' => $request->judul_berita,
            'tanggal_berita' => $request->tanggal_berita,
            'isi_berita' => $request->isi_berita,
            'gambar_berita' => $gambar,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('berita.index')->with('success', 'Berita berhasil ditambahkan');
    }

    public function show(Berita $berita)
    {
        return view('backend.berita.crudberita.show', compact('berita'), [
            'title' => 'Lihat Data Berita'
        ]);
    }

    public function edit(Berita $berita)
    {
        return view('backend.berita.crudberita.edit', compact('berita'), [
            'title' => 'Edit Data Berita'
        ]);
    }

    public function update(Request $request, Berita $berita)
    {
        $request->validate([
            'judul_berita' => 'required',
            'tanggal_berita' => 'required|date',
            'isi_berita' => 'required',
            'gambar_berita' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('gambar_berita')) {
            if ($berita->gambar_berita) {
                Storage::disk('public')->delete($berita->gambar_berita);
            }
            $gambar = $request->file('gambar_berita')->store('berita', 'public');
        } else {
            $gambar = $berita->gambar_berita;
        }

        $berita->update([
            'judul_berita' => $request->judul_berita,
            'tanggal_berita' => $request->tanggal_berita,
            'isi_berita' => $request->isi_berita,
            'gambar_berita' => $gambar,
        ]);

        return redirect()->route('berita.index')->with('success', 'Berita berhasil diperbarui');
    }

    public function destroy(Berita $berita)
    {
        if ($berita->gambar_berita) {
            Storage::disk('public')->delete($berita->gambar_berita);
        }
        $berita->delete();

        return redirect()->route('berita.index')->with('success', 'Berita berhasil dihapus');
    }

    public function showUSer(Berita $berita)
    {
        return view('detail.detailberita', compact('berita'), [
            'title' => 'Lihat Data Berita'
        ]);
    }
}
