<?php

namespace App\Http\Controllers;

use App\Models\Organisasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class OrganisasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $organisasis = Organisasi::all();
        return view('backend.profile.organisasi.organisasi',compact('organisasis'),[
            'title' => 'Organisasi'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.profile.organisasi.create',[
            'title' => 'Tambah Data Organisasi'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nip' => 'required|integer|unique:organisasis,nip',
            'jabatan' => 'required|string|max:255',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'facebook' => 'nullable|string',
            'instagram' => 'nullable|string',
            'linkedin' => 'nullable|string',
        ]);

        $fotoPath = $request->file('foto')->store('organisasi', 'public');

        Organisasi::create([
            'nama' => $request->nama,
            'nip' => $request->nip,
            'jabatan' => $request->jabatan,
            'foto' => $fotoPath,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'linkedin' => $request->linkedin,
        ]);

        return redirect()->route('organisasis.index')->with('success', 'Data berhasil ditambahkan.');
    }


    /**
     * Display the specified resource.
     */
    public function show(Organisasi $organisasi)
    {
        return view('backend.profile.organisasi.show', compact('organisasi'),[
            'title' => 'Show Data Organisasi'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Organisasi $organisasi)
    {
        return view('backend.profile.organisasi.edit', compact('organisasi'),[
            'title' => 'Edit Data Organisasi'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Organisasi $organisasi)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nip' => 'required|integer|unique:organisasis,nip,' . $organisasi->id,
            'jabatan' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'facebook' => 'nullable|string',
            'instagram' => 'nullable|string',
            'linkedin' => 'nullable|string',
        ]);

        if ($request->hasFile('foto')) {
            // Hapus foto lama
            if ($organisasi->foto && Storage::disk('public')->exists($organisasi->foto)) {
                Storage::disk('public')->delete($organisasi->foto);
            }
            $fotoPath = $request->file('foto')->store('organisasi', 'public');
            $organisasi->foto = $fotoPath;
        }

        $organisasi->update([
            'nama' => $request->nama,
            'nip' => $request->nip,
            'jabatan' => $request->jabatan,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'linkedin' => $request->linkedin,
        ]);

        return redirect()->route('organisasis.index')->with('success', 'Data berhasil diupdate.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Organisasi $organisasi)
    {
        if ($organisasi->foto && Storage::disk('public')->exists($organisasi->foto)) {
            Storage::disk('public')->delete($organisasi->foto);
        }

        $organisasi->delete();
        return redirect()->route('organisasis.index')->with('success', 'Data Berhasil Dihapus');
    }
}
