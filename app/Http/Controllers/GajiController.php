<?php

namespace App\Http\Controllers;

use App\Models\Gaji;
use App\Models\Pekerja;
use Illuminate\Http\Request;

class GajiController extends Controller
{
    public function index()
    {
        $gaji = Gaji::with('pekerja')->get();

        return view('backend.gaji.tampil', compact('gaji'));
    }

    public function create()
    {
        $pekerja = Pekerja::all();

        return view('backend.gaji.create', compact('pekerja'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'gaji_tanggal' => 'required|date',
            'gaji_nominal' => 'required|numeric',
            'gaji_idpekerja' => 'required|exists:pekerja,pekerja_id',
        ]);

        Gaji::create($request->all());

        return redirect()->route('gaji.index')
            ->with('success', 'Data gaji berhasil ditambahkan.');
    }

    public function edit(Gaji $gaji)
    {
        $pekerja = Pekerja::all();

        return view('backend.gaji.edit', compact('gaji', 'pekerja'));
    }

    public function update(Request $request, Gaji $gaji)
    {
        $request->validate([
            'gaji_tanggal' => 'required|date',
            'gaji_nominal' => 'required|numeric',
            'gaji_idpekerja' => 'required|exists:pekerja,pekerja_id',
        ]);

        $gaji->update($request->all());

        return redirect()->route('gaji.index')
            ->with('success', 'Data gaji berhasil diperbarui.');
    }

    public function destroy(Gaji $gaji)
    {
        $gaji->delete();

        return redirect()->route('gaji.index')
            ->with('success', 'Data gaji berhasil dihapus.');
    }

    // menampilkan halaman untuk membuat data pekerja
    public function createPekerja()
    {
        return view('backend.pekerja.create');
    }

    // menyimpan data pekerja yang baru dibuat
    public function storePekerja(Request $request)
    {
        $request->validate([
            'pekerja_nama' => 'required|string',
            'pekerja_alamat' => 'required|string',
            'pekerja_telepon' => 'required|string',
            'pekerja_email' => 'required|email|unique:pekerja,pekerja_email',
        ]);

        Pekerja::create($request->all());

        return redirect()->route('gaji.create')
            ->with('success', 'Data pekerja berhasil ditambahkan.');
    }

    // menampilkan halaman untuk mengedit data pekerja
    public function editPekerja(Pekerja $pekerja)
    {
        return view('backend.pekerja.edit', compact('pekerja'));
    }

    // menyimpan perubahan data pekerja
    public function updatePekerja(Request $request, Pekerja $pekerja)
    {
        $request->validate([
            'pekerja_nama' => 'required|string',
            'pekerja_alamat' => 'required|string',
            'pekerja_telepon' => 'required|string',
            'pekerja_email' => 'required|email|unique:pekerja,pekerja_email,'.$pekerja->pekerja_id.',pekerja_id',
        ]);

        $pekerja->update($request->all());

        return redirect()->route('gaji.create')->with('success', 'Data pekerja berhasil diperbarui.');
    }

    public function destroyPekerja(Pekerja $pekerja)
    {
        $pekerja->delete();
    
        return redirect()->route('gaji.create')
            ->with('success', 'Data pekerja berhasil dihapus.');
    }
}