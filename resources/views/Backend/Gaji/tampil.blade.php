@extends('backend/layouts.utama')

@section('content15')
<main id="main" class="main">
<div class="pagetitle">
  <h1>Data Gaji</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a>Beranda</a></li>
      <li class="breadcrumb-item active">Data Gaji</li>
    </ol>
  </nav>
</div>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Data Gaji</h2>
            </div>
            <div class="pull-right">
                <a href="{{ route('gaji.create') }}" class="btn btn-success mb-3">+ Tambah Gaji</a>
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
                <table class="table table-bordered">
                    <thead class="table-success">
                    <tr class="text-center">
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Nominal</th>
                            <th>Pekerja</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($gaji as $g)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td class="text-center">{{ $g->gaji_tanggal }}</td>
                                <td class="text-center">Rp {{ number_format($g->gaji_nominal, 0, ',', '.') }}</td>
                                <td>{{ $g->pekerja->pekerja_nama }}</td>
                                <td class="text-center">
                                    <form action="{{ route('gaji.destroy', $g->gaji_id) }}" method="POST">
                                        <a href="{{ route('gaji.edit', $g->gaji_id) }}" class="btn btn-primary btn-sm">Ubah</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection