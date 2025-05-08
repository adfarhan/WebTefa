<?php

namespace App\Http\Controllers;

use App\Models\Industri;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class IndustriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $industri = Industri::all();
        return view('backend.profile.crudperusahaan.pt', compact('industri'),[
            'title' => 'Industri'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.profile.crudperusahaan.create',[
            'title' => 'Tambah Data Industri'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nama_industri' => 'required|string|max:255',
            'tanggal_kerjasama' => 'required|date',
            'profile_industri' => 'required|string',
            'logo_industri' => 'required|image|mimes:jpg,jpeg,png,svg|max:2048',
            'alamat_industri' => 'required|string',
            'kontak_industri' => 'required|string',
            'email_industri' => 'required|email',
            'bidang_konsentrasi' => 'required|string',
        ]);

        $logoPath = null;
        if ($request->hasFile('logo_industri')) {
            $logoPath = $request->file('logo_industri')->store('logo_industri', 'public');
        }

        Industri::create([
            'nama_industri' => $request->nama_industri,
            'tanggal_kerjasama' => $request->tanggal_kerjasama,
            'profile_industri' => $request->profile_industri,
            'logo_industri' => $logoPath, // pakai path hasil upload!
            'alamat_industri' => $request->alamat_industri,
            'kontak_industri' => $request->kontak_industri,
            'email_industri' => $request->email_industri,
            'bidang_konsentrasi' => $request->bidang_konsentrasi,
        ]);


        return redirect()->route('industri.index')->with('success', 'Data industri berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Industri $industri)
    {
        //
        return view('backend.profile.crudperusahaan.show', compact('industri'),[
            'title' => 'Show Data Industri'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Industri $industri)
    {
        //
        return view('backend.profile.crudperusahaan.edit', compact('industri'),[
            'title' => 'Edit Data Industri'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Industri $industri)
    {
        $request->validate([
            'nama_industri' => 'required|string|max:255',
            'tanggal_kerjasama' => 'required|date',
            'profile_industri' => 'required|string',
            'logo_industri' => 'nullable|image|mimes:jpg,jpeg,png,svg|max:2048',
            'alamat_industri' => 'required|string',
            'kontak_industri' => 'required|string',
            'email_industri' => 'required|email',
            'bidang_konsentrasi' => 'required|string',
        ]);

        $data = [
            'nama_industri' => $request->nama_industri,
            'tanggal_kerjasama' => $request->tanggal_kerjasama,
            'profile_industri' => $request->profile_industri,
            'alamat_industri' => $request->alamat_industri,
            'kontak_industri' => $request->kontak_industri,
            'email_industri' => $request->email_industri,
            'bidang_konsentrasi' => $request->bidang_konsentrasi,
        ];

        if ($request->hasFile('logo_industri')) {
            // Hapus logo lama
            if ($industri->logo_industri && Storage::disk('public')->exists($industri->logo_industri)) {
                Storage::disk('public')->delete($industri->logo_industri);
            }

            // Upload logo baru
            $data['logo_industri'] = $request->file('logo_industri')->store('logo_industri', 'public');
        }

        $industri->update($data);

        return redirect()->route('industri.index')->with('success', 'Data industri berhasil diupdate!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Industri $industri)
    {
        // Hapus logo dari storage
        if ($industri->logo_industri && Storage::disk('public')->exists($industri->logo_industri)) {
            Storage::disk('public')->delete($industri->logo_industri);
        }

        // Hapus data dari database
        $industri->delete();

        return redirect()->route('industri.index')->with('success', 'Data industri berhasil dihapus!');
    }

    public function showUser(Industri $industri)
    {
        //
        return view('detail.detailindustri', compact('industri'),[
            'title' => 'Show Data Industri'
        ]);
    }

}
