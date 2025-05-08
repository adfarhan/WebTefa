<?php

namespace App\Http\Controllers;

use App\Models\Beranda;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class BerandaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        //
        $landing = Beranda::all();
        return view('backend.beranda.landingberanda', compact('landing'),[
            'title' => 'Landing'
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        //
        return view('backend.beranda.crudlanding.create', [
            'title' => 'Tambah Data Landing'
        ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'judul' => 'required',
            'pekat' => 'required',
            'logo' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
        ]);

        $logoPath = null;
        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('logo_beranda', 'public');
        }

        Beranda::create([
            'judul' => $request->judul,
            'pekat' => $request->pekat,
            'logo' => $logoPath,
        ]);

        return redirect()->route('landing.index')->with('success', 'Data Beranda Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(Beranda $landing)
    {

        return view('backend.beranda.crudlanding.show', compact('landing'), [
            'title' => 'Show Data Landing'
        ]);

    }

    public function edit(Beranda $landing)
    {

        return view('backend.beranda.crudlanding.edit', compact('landing'), [
            'title' => 'Edit Data Landing'
        ]);

    }

    public function update(Request $request, Beranda $landing)
    {
        $request->validate([

            'judul' => 'required',
            'pekat' => 'required',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:2048',
        ]);

        if ($request->hasFile('logo')) {
            // Hapus logo lama
            if ($landing->logo && Storage::disk('public')->exists($landing->logo)) {
                Storage::disk('public')->delete($landing->logo);
            }

            // Upload logo baru
            $logoPath = $request->file('logo')->store('logo_beranda', 'public');
        } else {
            $logoPath = $landing->logo;
        }

        $landing->update([
            'judul' => $request->judul,
            'pekat' => $request->pekat,
            'logo' => $logoPath,
        ]);

        return redirect()->route('landing.index')->with('success', 'Data Beranda Berhasil Diperbarui');
    }

    public function destroy(Beranda $landing)
    {

        // Hapus file logo
        if ($landing->logo && Storage::disk('public')->exists($landing->logo)) {
            Storage::disk('public')->delete($landing->logo);
        }

        $landing->delete();

        return redirect()->route('landing.index')->with('success', 'Data Beranda Berhasil Dihapus');
    }


    }
