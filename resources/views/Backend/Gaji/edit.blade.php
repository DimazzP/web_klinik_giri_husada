@extends('backend/layouts.utama')

@section('content11')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Ubah Data Gaji</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a>Beranda</a></li>
                <li class="breadcrumb-item"><a>Data Gaji</a></li>
                <li class="breadcrumb-item active">Ubah Data Gaji</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Ubah Data Gaji</h2>
            </div>
            
        </div>
    </div>

    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> Terjadi kesalahan saat input data.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
                <form action="{{ route('gaji.update', $gaji->gaji_id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                    <strong><label for="gaji_tanggal">Tanggal:</label><strong>
                        <input type="date" class="form-control" id="gaji_tanggal" name="gaji_tanggal" value="{{ $gaji->gaji_tanggal }}" required>
                    </div>
                    <div class="form-group">
                        <label for="gaji_nominal">Nominal:</label>
                        <input type="text" class="form-control" id="gaji_nominal" name="gaji_nominal" value="{{ $gaji->gaji_nominal }}" required>
                    </div>
                    <div class="form-group">
                        <label for="gaji_idpekerja">Pekerja:</label>
                        <select class="form-control" id="gaji_idpekerja" name="gaji_idpekerja" required>
                            <option value="">Pilih Pekerja:</option>
                            @foreach ($pekerja as $p)
                                <option value="{{ $p->pekerja_id }}" {{ $p->pekerja_id == $gaji->gaji_idpekerja ? 'selected' : '' }}>{{ $p->pekerja_nama }}</option>
                            @endforeach
                        </select>
                    </div></br>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                <a class="btn btn-secondary" href="{{ route('gaji.index') }}">Kembali</a>
                   
                </form>
            </div>
        </div>
    </div>
    </main>
@endsection