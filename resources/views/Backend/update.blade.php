@extends('backend/layouts.utama')

@section('content4')
<main id="main" class="main">
<div class="pagetitle">
  <h1>Perbarui Pengumuman</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item active">Dashboard</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
<div class="container">
  <div class="row">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Pembaruan pengumuman') }}</div>

        <div class="card-body">
          <form method="POST" action="{{ route('berita.update', $berita->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group row">
              <label for="judul" class="col-md-4 col-form-label text-md-right">{{ __('Judul') }}</label>

              <div class="col-md-6">
                <input id="judul" type="text" class="form-control @error('judul') is-invalid @enderror" 
                name="judul" value="{{ $berita->judul }}" required autocomplete="judul" autofocus>

                @error('judul')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>

            <div class="form-group row">
              <label for="deskripsi" class="col-md-4 col-form-label text-md-right">{{ __('Deskripsi') }}</label>

              <div class="col-md-6">
                <textarea id="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" 
                name="deskripsi" required autocomplete="deskripsi">{{ $berita->deskripsi }}</textarea>

                @error('deskripsi')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>

            <div class="form-group row">
              <label for="gambar" class="col-md-4 col-form-label text-md-right">{{ __('Gambar') }}</label>

              <div class="col-md-6">
                <input type="file" class="form-control-file @error('gambar') is-invalid @enderror" id="gambar" name="gambar">

                @error('gambar')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror

                @if ($berita->gambar)
                  <img src="{{ asset($berita->gambar) }}" alt="{{ $berita->judul }}" class="mt-2 img-thumbnail" width="200">
                @endif
              </div>
            </div>
            <div class="form-group row">
                            <label for="tanggal_dibuat" class="col-md-4 col-form-label text-md-right">{{ __('Tanggal Dibuat') }}</label>
                            <div class="col-md-6">
                            <input type="date" name="tanggal_dibuat" id="tanggal_dibuat" class="form-control @error('deskripsi') is-invalid @enderror">
                        </div>
                        </div>
            <div class="form-group row mb-0">
              <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                  {{ __('Update') }}
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</main>
@endsection
