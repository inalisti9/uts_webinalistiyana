<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswas = \App\Models\Mahasiswa::paginate(10);
        return view('mahasiswa.index', compact('mahasiswas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $mahasiswas = new Mahasiswa();
        $mahasiswas->nim = $request->nim;
        $mahasiswas->nama = $request->nama;
        $mahasiswas->tempat_lahir = $request->tempat_lahir;
        $mahasiswas->tanggal_lahir = $request->tanggal_lahir;
        $mahasiswas->save();
        return redirect()->route('mahasiswa.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $mahasiswas = Mahasiswa::findOrFail($id);
        return view('mahasiswa.show', compact('mahasiswas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $mahasiswas = Mahasiswa::find($id);
        return view('mahasiswa.edit',compact('mahasiswas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'no' => 'requird',
            'nim' => 'required',
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
        ]);
        
        $mahasiswas = Mahasiswa::find($id);
        $mahasiswas->nim = $request->nim;
        $mahasiswas->nama = $request->nama;
        $mahasiswas->tempat_lahir = $request->tempat_lahir;
        $mahasiswas->tanggal_lahir = $request->tanggal_lahir;
        $mahasiswas->save();
        return redirect()->route('mahasiswa.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mahasiswas = Mahasiswa::findOrFail($id);
        $mahasiswas->delete();

        return redirect()->route('mahasiswa.index')->with('success', 'Data siswa berhasil dihapus');
    }
}
