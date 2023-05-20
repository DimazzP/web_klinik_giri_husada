<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RekamMedis;

class RekamMedisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $rekammedis = RekamMedis::join('daftar_layanan', 'daftar_id', '=', 'rekam_medis.rekam_idlayanan')
            ->join('pasien', 'pasien_id', '=', 'daftar_layanan.daftar_idpasien')->get();

        $cari = $request->cari;

        if (strlen($cari)) {
            $rekammedis = $rekammedis->where('pasien_nama', 'like', "%$cari%");
        }

        return view('rekam_medis.tampil', compact('rekammedis'));
    }

    public function create()
    {
        return view('rekam_medis.tambah1');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
          
            'rekam_tanggal'         => 'required|date',
            'rekam_terapinonobat'   => 'required',
            'rekam_anamnesa'        => 'required',
            'rekam_alergi'          => 'required',
            'rekam_prognosa'        => 'required',
            'rekam_terapiobat'      => 'required',
            'rekam_bmhp'            => 'required',
            'rekam_diagnosa'        => 'required',
            'rekam_kesadaran'       => 'required',
            'rekam_suhu'            => 'required',
            'rekam_sistole'         => 'required',
            'rekam_respiratorydate' => 'required',
            'rekam_diastole'        => 'required',
            'rekam_heartrate'       => 'required',
            'rekam_tinggibadan'     => 'required',
            'rekam_beratbadan'      => 'required',
            'rekam_lingkarperut'    => 'required',
            'rekam_imt'             => 'required',
            'rekam_kecelakaan'      => 'required',
            'rekam_tenagamedis'     => 'required',
            'rekam_statuspulang'    => 'required',
            'rekam_idlayanan'       => 'required',
        ]);

        RekamMedis::create($request->all());

        return redirect()->route('rekam_medis.tampil')
            ->with('success', 'Rekam Medis Pasien berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $rekam_id)
    {
        $rekammedis = RekamMedis::join('daftar_layanan', 'daftar_id', '=', 'rekam_medis.rekam_idlayanan')
            ->join('pasien', 'pasien_id', '=', 'daftar_layanan.daftar_idpasien')
            ->findOrFail($rekam_id);

        return view('rekam_medis.show', compact('rekammedis'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $rekammedis = RekamMedis::findOrFail($id);
        return view('rekam_medis.edit', compact('rekammedis'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rekammedis = RekamMedis::findOrFail($id);

        $request->validate([
          
            'rekam_tanggal'         => 'required|date',
            'rekam_terapinonobat'       => 'required',
            'rekam_anamnesa'        => 'required',
            'rekam_alergi'          => 'required',
            'rekam_prognosa'        => 'required',
            'rekam_terapiobat'      => 'required',
            'rekam_bmhp'            => 'required',
            'rekam_diagnosa'        => 'required',
            'rekam_kesadaran'       => 'required',
            'rekam_suhu'            => 'required',
            'rekam_sistole'         => 'required',
            'rekam_respiratorydate' => 'required',
            'rekam_diastole'        => 'required',
            'rekam_heartrate'       => 'required',
            'rekam_tinggibadan'     => 'required',
            'rekam_beratbadan'      => 'required',
            'rekam_lingkarperut'    => 'required',
            'rekam_imt'             => 'required',
            'rekam_kecelakaan'      => 'required',
            'rekam_tenagamedis'     => 'required',
            'rekam_statuspulang'    => 'required',
            'rekam_idlayanan'       => 'required',
        ]);
        
        $rekammedis->update($request->all());

        return redirect()->route('rekam_medis.show', $rekammedis->rekam_id)
            ->with('success', 'Data rekam medis Pasien berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
