@extends('backend/layouts.utama')



@section('content2')
<main id="main" class="main">
<div class="pagetitle">
  <h1>Pengumuman</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item active">Pengumuman</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
<section class="section dashboard">
<div class="col-lg-8">
      <div class="row">
        <div class="col-md-12">
            <a href="{{ route('berita.create') }}" class="btn btn-primary">buat Pengumuman</a><br><br><br>
            <!-- <a type="hidden" href="{{ route('berita.hapusExpired') }}" class="btn btn-primary">Lihat Detail2</a> -->
        </div>
    </div>
    <div class="row row-cards">
        @foreach ($berita as $berita)
        
        <div class="col-lg-8">
      <div class="row row-cards">
                <img src="{{ asset($berita->gambar) }}" class="card-img-top" alt="{{ $berita->judul }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $berita->judul }}</h5>
                    <p class="card-text">{{ $berita->deskripsi }}</p>
                    <a href="{{ route('berita.show', $berita->id) }}" class="btn btn-primary">Lihat Detail</a>
                    

                </div>
            </div>
        </div>
        @endforeach
        
    </div>
</div>
</main>
@endsection






