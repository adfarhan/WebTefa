<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index()
    {
        $programs = Program::all();
        return view('backend.program.crudprogram.program', compact('programs'),[
            'title' => 'CRUD Program'
        ]);
    }

    public function create()
    {
        return view('backend.program.crudprogram.create',[
            'title' => 'Edit Data Program'
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_program' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $gambarPath = null;
        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('program_images', 'public');
        }

        Program::create([
            'nama_program' => $request->nama_program,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambarPath
        ]);

        return redirect()->route('programs.index')->with('success', 'Program berhasil ditambahkan.');
    }

    public function show(Program $program)
    {
        return view('backend.program.crudprogram.show', compact('program'),[
            'title' => 'Show Data Program'
        ]);
    }

    public function edit(Program $program)
    {
        return view('backend.program.crudprogram.edit', compact('program'),[
            'title' => 'Edit Data Program'
        ]);
    }

    public function update(Request $request, Program $program)
    {
        $request->validate([
            'nama_program' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('program_images', 'public');
            $program->gambar = $gambarPath;
        }

        $program->update([
            'nama_program' => $request->nama_program,
            'deskripsi' => $request->deskripsi
        ]);

        return redirect()->route('programs.index')->with('success', 'Program berhasil diperbarui.');
    }

    public function destroy(Program $program)
    {
        // Hapus gambar jika ada
        if ($program->gambar) {
            $gambarPath = storage_path('app/public/' . $program->gambar);
            if (file_exists($gambarPath)) {
                unlink($gambarPath);
            }
        }

        // Hapus data program dari database
        $program->delete();

        return redirect()->route('programs.index')->with('success', 'Program dan gambar berhasil dihapus.');
    }

    public function showUser(Program $program)
    {
        return view('detail.detailprogram', compact('program'),[
            'title' => 'Show Data Program'
        ]);
    }

}
