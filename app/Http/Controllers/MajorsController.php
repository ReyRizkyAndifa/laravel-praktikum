<?php

namespace App\Http\Controllers;

use App\Models\Major;
use App\Models\Majors;
use Illuminate\Http\Request;

class MajorsController extends Controller
{
    // Tampilkan semua jurusan
    public function index()
    {
        $majors = Majors::all();
        return view('majors.index', compact('majors'));
    }

    // Form tambah jurusan
    public function create()
    {
        return view('majors.create');
    }

    // Simpan data jurusan baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|unique:majors,code',
            'description' => 'nullable|string',
        ]);

        Majors::create($validated);

        return redirect()->route('majors.index')->with('success', 'Jurusan berhasil ditambahkan.');
    }

    // Tampilkan detail jurusan
    public function show(Majors $major)
    {
        return view('majors.show', compact('major'));
    }

    // Form edit jurusan
    public function edit(Majors $major)
    {
        return view('majors.edit', compact('major'));
    }

    // Update jurusan
    public function update(Request $request, Majors $major)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|unique:majors,code,' . $major->id,
            'description' => 'nullable|string',
        ]);

        $major->update($validated);

        return redirect()->route('majors.index')->with('success', 'Jurusan berhasil diupdate.');
    }

    // Hapus jurusan
    public function destroy(Majors $major)
    {
        $major->delete();

        return redirect()->route('majors.index')->with('success', 'Jurusan berhasil dihapus.');
    }
}
