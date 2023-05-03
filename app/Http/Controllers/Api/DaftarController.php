<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DaftarLayanan;
use App\Models\User;

class DaftarController extends Controller
{

    public function show($id)
    {
        // $daftar = DaftarLayanan::where('daftar_idpasien', 1)->with('jenislayanan')->get();
        $daftar = DaftarLayanan::join('jenis_layanan', 'jenis_id', '=', 'daftar_layanan.daftar_idjenis')->join('pekerja', 'jenis_iddokter', '=', 'pekerja_id')->select('daftar_id', 'daftar_tanggal', 'daftar_status', 'daftar_nomor', 'jenis_layanan', 'pekerja_nama')->get();
        // $daftar = DaftarLayanan::with('jenis_layanan')->select('daftar_id', 'daftar_tanggal', 'daftar_status', 'jenis_layanan')->get();

        if ($daftar == null) {
            return response()->json([
                'status' => 200,
                'title' => 'Gagal Ditampilkan',
                'message' => "Gagal menampilkan ke layar.",
                'data' => $daftar,
            ], 400);
        }
        return response()->json([
            'status' => 200,
            'title' => 'Berhasil Ditampilkan',
            'message' => "Anda berhasil menampilkan data ke layar.",
            'data' => $daftar,
        ], 200);
    }
    public function store(Request $request)
    {
        $daftar = DaftarLayanan::create([
            'daftar_tanggal' => $request->daftar_tanggal,
            'daftar_status' => $request->daftar_status,
            'daftar_nomor' => $request->daftar_nomor,
            'daftar_idpasien' => $request->daftar_idpasien,
            'daftar_idjenis' => $request->daftar_idjenis,
        ]);
        return response()->json([
            'status' => 201,
            'title' => 'Berhasil Menambahkan',
            'message' => "Anda berhasil mendaftar ke layanan kami.",
            'data' => null,
        ], 201);
    }
}
