<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profile = Profile::all();
        return view('backend.profile.crudsejarah.sejarah', compact('profile'),[
            'title' => 'Profile Sejarah'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.profile.crudsejarah.create',[
            'title' => 'Tambah Data Sejarah'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'sejarah'=>'required',
            'latar_belakang'=>'required',
        ]);
        Profile::create($request->all());
        return redirect()->route('profile.index')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Profile $profile)
    {
        return view('backend.profile.crudsejarah.show',compact('profile'),[
            'title' => 'Show Data Sejarah'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profile $profile)
    {
        return view('backend.profile.crudsejarah.edit',compact('profile'),[
            'title' => 'Edit Data Sejarah'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Profile $profile)
    {
        $request->validate([
            'sejarah'=>'required',
            'latar_belakang'=>'required',
        ]);
        $profile->update($request->all());
        return redirect()->route('profile.index')->with('success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profile $profile)
    {
        $profile->delete();
        return redirect()->route('profile.index')->with('success', 'Data Berhasil Dihapus');
    }
}
