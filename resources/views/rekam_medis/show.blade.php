@extends('backend/layouts.utama')  

@section('content7')
<main id="main" class="main">
<div class="pagetitle">
  <h1>Detail Rekam Medis Pasien</h1>
  <nav>
    <ol class="breadcrumb">
      <l i class="breadcrumb-item"><a href="index.html">Home  /</a></li>
      <li class="breadcrumb-item active">Rekam Medis Pasien</li>
    </ol>
  </nav>
</div>

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Rekam Medis Pasien</h2>
            </div>
        </div>
    </div>
    <tbody>
 
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <script>
        setTimeout(function() {
            $(".alert").alert('close');
        }, 3000);
    </script>
@endif

    <!-- ------------------------------- -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-40">
                <div class="card">
                    <div class="card-header">{{ __('Detail Rekam Medis Pasien') }}</div>

                                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-100">
                            <div class="form-group">
                                <div class="col-md-4"
                                style=  padding: 20px;> 
                                <strong>Nama:</strong>
                                {{ $rekammedis->pasien_nama}}
                                </div>
                            </div>
                        </div>
                       
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Tanggal:</strong>
                                {{ $rekammedis->rekam_tanggal }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-100">
                            <div class="form-group">
                                <div class="col-md-4"
                                style=  padding: 20px;> 
                                <strong>Terapi Non Obat:</strong>
                                {{ $rekammedis->rekam_terapinonobat}}
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Anamnesa:</strong>
                                {{ $rekammedis->rekam_anamnesa }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Alergi:</strong>
                                {{ $rekammedis->rekam_alergi }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>prognosa:</strong>
                                {{ $rekammedis->rekam_prognosa }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Terapi Obat:</strong>
                                {{ $rekammedis->rekam_terapiobat }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>bmhp:</strong>
                                {{ $rekammedis->rekam_bmhp }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Diagnosa:</strong>
                                {{ $rekammedis->rekam_diagnosa }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Kesadaran:</strong>
                                {{ $rekammedis->rekam_kesadaran }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Suhu:</strong>
                                {{ $rekammedis->rekam_suhu }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>sistole:</strong>
                                {{ $rekammedis->rekam_sistole }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Respiratorydate:</strong>
                                {{ $rekammedis->rekam_respiratorydate }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Diastole:</strong>
                                {{ $rekammedis->rekam_diastole }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>heartrate:</strong>
                                {{ $rekammedis->rekam_heartrate }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Tinggi Badan:</strong>
                                {{ $rekammedis->rekam_tinggibadan}}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Berat Badan:</strong>
                                {{ $rekammedis->rekam_beratbadan }}
                            </div>
                        </div>     
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Lingkar Perut:</strong>
                                {{ $rekammedis->rekam_lingkarperut }}
                            </div>
                        </div>   
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Imt:</strong>
                                {{ $rekammedis->rekam_imt }}
                            </div>
                        </div> 
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Kecelakaan:</strong>
                                {{ $rekammedis->rekam_kecelakaan }}
                            </div>
                        </div>    
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Tenaga Medis:</strong>
                                {{ $rekammedis->rekam_tenagamedis }}
                            </div>
                        </div>    
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Status Pulang:</strong>
                                {{ $rekammedis->rekam_statuspulang}}
                            </div>
                        </div>              
                    </div>

                    <div class="pull-right">
                         <a class="btn btn-primary" href="{{ route('rekam_medis.index') }}"> Kembali</a>
                         
                         <a href="{{ route('rekam_medis.edit', $rekammedis->rekam_id) }}" class="btn btn-info">Edit</a>
                         <button onclick="printUser({{ $rekammedis->rekam_id }})" class="btn btn-success">Cetak Rekam Medis Pasien</button>

                            <script>
                                function printUser(rekam_Id) {
                                    window.open('/cetak_user/' + rekam_Id, '_blank');
                                }
                            </script>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </main>
@endsection
