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
        $visis = Visi::all();
        return view('visi.index', compact('visis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('visi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'visi' => 'required',
        ]);
        Visi::create($request->all());
        return redirect()->route('visi.index')->with('success', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Visi $visi)
    {
        return view('visi.show', compact('visi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Visi $visi)
    {
        return view('visi.edit', compact('visi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Visi $visi)
    {
        $request->validate([
            'visi' => 'required',
        ]);
        $visi->update($request->all());
        return redirect()->route('visi.index')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Visi $visi)
    {
        $visi->delete();
        return redirect()->route('visi.index')->with('success', 'Data berhasil dihapus');
    }
}
