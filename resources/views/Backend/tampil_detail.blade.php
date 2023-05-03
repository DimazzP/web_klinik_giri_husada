@extends('backend/layouts.utama')


@section('content3')
<main id="main" class="main">
<div class="pagetitle">
  <h1>Detail pengumuman</h1>
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
                    <div class="card-header">{{ __('Detail') }}</div>

                    <div class="card-body">
                        <h4>Judul : {{ $berita->judul }}</h4>
                        <small>Tanggal Dibuat : {{ $berita->tanggal_dibuat }}</small>
                        <hr>
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{ asset($berita->gambar) }}" alt="{{ $berita->judul }}" style="max-width: 100%;">
                            </div>
                            <div class="col-md-8">
                                <p>Deskripsi :</p>
                                <p>{{ $berita->deskripsi }}</p>
                            </div>
                        </div>
                        <hr>
                        <a href="{{ route('berita.edit', $berita->id) }}" class="btn btn-primary">{{ __('Perbarui') }}</a>
                        <form action="{{ route('berita.destroy', $berita->id) }}" method="POST" class="d-inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">{{ __('Hapus') }}</button>
                        </form>
                        <a href="{{ route('berita.index') }}" class="btn btn-secondary">{{ __('Kembali') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </main>
@endsection
