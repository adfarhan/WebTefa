<?php

namespace App\Http\Controllers;

use App\Models\Organisasi;
use Illuminate\Http\Request;

class OrganisasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $organisasis = Organisasi::all();
        return view('organisasi.index', compact('organisasis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('organisasi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'=>'required',
            'nip'=>'required|max:20',
            'jabatan'=>'required',

        ]);
        Organisasi::create($request->all());
        return redirect()->route('organisasi.index')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Organisasi $organisasi)
    {
        return view('organisasi.show', compact('organisasi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Organisasi $organisasi)
    {
        return view('organisasi.edit', compact('organisasi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Organisasi $organisasi)
    {
        $request->validate([
            'nama'=>'required',
            'nip'=>'required|max:20',
            'jabatan'=>'required',

        ]);
        $organisasi->update($request->all());
        return redirect()->route('organisasi.index')->with('success', 'Data Berhasil Dihapus');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Organisasi $organisasi)
    {
        $organisasi->delete();
        return redirect()->route('organisasi.index')->with('success', 'Data Berhasil Dihapus');
    }
}
