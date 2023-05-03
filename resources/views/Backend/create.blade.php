@extends('backend/layouts.utama')

@section('content1')
<main id="main" class="main">
<div class="pagetitle">
  <h1>Tambah pengumuman</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item active">Dashboard</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tambahkan Pengumuman') }}</div>

                <div class="card-body">
                    <form action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="judul">{{ __('Judul') }}</label>
                            <input type="text" name="judul" id="judul" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="deskripsi">{{ __('Deskripsi') }}</label>
                            <textarea name="deskripsi" id="deskripsi" rows="5" class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="gambar">{{ __('Gambar') }}</label>
                            <input type="file" name="gambar" id="gambar" class="form-control-file">
                        </div>

                        <div class="form-group">
                            <label for="tanggal_dibuat">{{ __('Tanggal Dibuat') }}</label>
                            <input type="date" name="tanggal_dibuat" id="tanggal_dibuat" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="tanggal_hapus">{{ __('Tanggal Hapus') }}</label>
                            <input type="date" name="tanggal_hapus" id="tanggal_hapus" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-primary">
                                        {{ __('Simpan') }}
                                    </button>
                        <a href="{{ route('berita.index') }}" class="btn btn-secondary">{{ __('Kembali') }}</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</main>
@endsection