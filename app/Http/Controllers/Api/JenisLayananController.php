<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\DaftarLayanan;
use App\Models\JenisLayanan;
use Illuminate\Http\Request;

class JenisLayananController extends Controller
{
    public function show($id, $date)
    {
        $jenis = JenisLayanan::join('pekerja', 'pekerja_id', '=', 'jenis_layanan.jenis_iddokter')
            // ->join('daftar_layanan', 'daftar_id', '=', 'daftar_layanan.daftar_idjenis')
            ->select('jenis_id', 'jenis_layanan', 'pekerja_nama')
            ->where('jenis_id', $id)
            // ->orderBy('daftar_id', 'desc')
            ->first();
        $daftar = DaftarLayanan::select('daftar_nomor')
            ->where('daftar_idjenis', $id)
            ->where('daftar_tanggal', 'LIKE', $date . '%')
            ->orderBy('daftar_id', 'desc')->first();
        return response()->json([
            'status' => 200,
            'title' => 'Berhasil Ditampilkan',
            'message' => "Berhasil menampilkan ke layar.",
            'data' => $jenis,
            'antrian' => $daftar
        ], 200);
    }
}
