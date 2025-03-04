<?php

namespace App\Http\Controllers;

use App\Models\Misi;
use App\Models\Visi;
use Illuminate\Http\Request;

class MisiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $misis = Misi::all();
        return view('misi.index', compact('misis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $visis = Visi::all();
        return view('misi.create', compact('visi'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'misi'=>'required',
            'visi_id'=>'required|exists:visis,id',
        ]);
        Misi::create($request->all());
        return redirect()->route('misi.index')->with('success', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Misi $misi)
    {
        return view('misi.show',compact('misi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Misi $misi)
    {
        $visi = Visi::all();
        return view('misi.edit', compact('misi', 'visi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Misi $misi)
    {
        $request->validate([
            'misi'=>'required',
            'visi_id'=>'required|exists:visis,id',
        ]);
        $misi->update($request->all());
        return redirect()->route('misi.index')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Misi $misi)
    {
        $misi->delete();
        return redirect()->route('misi.index')->with('success', 'Data berhasil dihapus');
    }
}
