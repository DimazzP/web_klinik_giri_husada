@extends('backend/layouts.utama')  

@section('content')
<main id="main" class="main">
<div class="pagetitle">
  <h1>Detail Pasien</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a>Beranda</a></li>
      <li class="breadcrumb-item">Daftar Pasien</li>
      <li class="breadcrumb-item active">Detail Pasien</li>
    </ol>
  </nav>
</div>

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Detail Pasien</h2>
            </div>
        </div>
    </div>
    <tbody>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-25">
                <div class="card">
                   

                                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-100">
                            <div class="form-group">
                                <div class="col-md-4"
                                style=  padding: 20px;> 
                                <strong>Nama:</strong>
                                {{ $pasiens->pasien_nama }}
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-100">
                            <div class="form-group">
                                <div class="col-md-4"
                                style=  padding: 20px;> 
                                <strong>NIK:</strong>
                                {{ $pasiens->pasien_nik }}
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Alamat:</strong>
                                {{ $pasiens->pasien_alamat }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Jenis Kelamin:</strong>
                                {{ $pasiens->pasien_gender }}
                            </div>
                        </div>
                        {{-- <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Tanggal Lahir:</strong>
                                {{ $pasiens->tanggal_lahir }}
                            </div>
                        </div> --}}
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 ">
</br>
                 <a class="btn btn-secondary" href="{{ route('pasiens.tampil') }}"> Kembali</a>
</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </main>
@endsection
