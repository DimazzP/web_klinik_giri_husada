<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DaftarLayanan;
use App\Models\JenisLayanan;
use App\Models\Pekerja;

class DaftarController extends Controller
{


    public function showCheck($idpasien, $idlayanan, $date)
    {
        return null;
        // $data = DaftarLayanan::where('daftar_idpasien', $idpasien)
        //     ->where('daftar_idjenis', $idlayanan)
        //     ->where('daftar_tanggal', $date)->get();
        // return response()->json([
        //     'status' => 200,
        //     'title' => 'Anda Sudah Terdaftar',
        //     'message' => 'Anda sudah mendaftarkan diri anda sebelumnya',
        //     'data' => null,
        // ]);
    }

    public function show($id)
    {
    }
    public function showPasien($id)
    {
        // $daftar = DaftarLayanan::where('daftar_idpasien', 1)->with('jenislayanan')->get();
        $daftar = DaftarLayanan::join('jenis_layanan', 'jenis_id', '=', 'daftar_layanan.daftar_idjenis')
            ->join('pekerja', 'jenis_iddokter', '=', 'pekerja_id')
            ->select('daftar_id', 'daftar_tanggal', 'daftar_status', 'daftar_nomor', 'jenis_layanan', 'pekerja_nama')
            ->where('daftar_idpasien', $id)
            ->orderBy('daftar_id', 'desc')
            ->get();
        // $daftar = DaftarLayanan::with('jenis_layanan')->select('daftar_id', 'daftar_tanggal', 'daftar_status', 'jenis_layanan')->get();

        if ($daftar == null) {
            return response()->json([
                'status' => 204,
                'title' => 'Gagal Ditampilkan',
                'message' => "Gagal menampilkan ke layar.",
                'data' => $daftar,
            ], 204);
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
        $data = DaftarLayanan::where('daftar_idpasien', $request->daftar_idpasien)
            ->where('daftar_idjenis', $request->daftar_idjenis)
            ->where('daftar_tanggal', $request->daftar_tanggal)
            ->first();
        if ($data === null) {
            $daftar = DaftarLayanan::create([
                'daftar_tanggal' => $request->daftar_tanggal,
                'daftar_status' => $request->daftar_status,
                'daftar_nomor' => $request->daftar_nomor,
                'daftar_idpasien' => $request->daftar_idpasien,
                'daftar_idjenis' => $request->daftar_idjenis,
            ]);

            $jenis = JenisLayanan::findOrFail($daftar->daftar_idjenis)->first();
            $pekerja = Pekerja::findOrFail($jenis->jenis_iddokter)->first();

            return response()->json([
                'status' => 201,
                'title' => 'Berhasil Menambahkan',
                'message' => "Anda berhasil mendaftar ke layanan kami.",
                'data' => [[
                    'daftar_id' => $daftar->daftar_id,
                    'daftar_tanggal' => $daftar->daftar_tanggal,
                    'daftar_status' => $daftar->daftar_status,
                    'daftar_nomor' => intval($daftar->daftar_nomor),
                    'jenis_layanan' => $jenis->jenis_layanan,
                    'pekerja_nama' => $pekerja->pekerja_nama,
                ]],
            ], 201);
        } else {
            return response()->json([
                'status' => 409,
                'title' => 'Maaf Anda Sudah Terdaftar',
                'message' => 'Anda sudah mendaftarkan diri anda pada layanan ini sebelumnya. Periksa kembali riwayat pendaftaran anda.',
                'data' => [],
            ], 409);
        }
    }
}
