@extends('backend/layouts.utama')

@section('content10')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Tambah Data Gaji</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a>Beranda</a></li>
                <li class="breadcrumb-item"><a>Data Gaji</a></li>
                <li class="breadcrumb-item active">Tambah Data Gaji</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Tambah Data Gaji</h2>
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
                <form action="{{ route('gaji.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                    <strong> <label for="gaji_tanggal">Tanggal:</label><strong>
                        <input type="date" class="form-control" id="gaji_tanggal" name="gaji_tanggal" required>
                    </div>
                    <div class="form-group">
                        <label for="gaji_nominal">Nominal:</label>
                        <input type="text" class="form-control" id="gaji_nominal" name="gaji_nominal" required
                            value="{{ old('gaji_nominal') }}" min="0">
                        @error('gaji_nominal')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="gaji_idpekerja">Pekerja:</label>
                        <select class="form-control" id="gaji_idpekerja" name="gaji_idpekerja" required>
                            <option value="">Pilih Pekerja</option>
                            @foreach ($pekerja as $pekerja)
                                <option value="{{ $pekerja->pekerja_id }}">{{ $pekerja->pekerja_nama }}</option>
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

    @push('scripts')
    <script>
    $(document).ready(function() {
        console.log('Running currency format script...');
        $('#gaji_nominal').on('input', function(e) {
            // Remove any non-numeric characters
            let value = $(this).val().replace(/[^0-9]/g, '');
            // Format the value as IDR currency
            $(this).val('Rp ' + new Intl.NumberFormat('id-ID', { minimumFractionDigits: 0 }).format(value));
        });

        // Remove the 'Rp' prefix before submitting the form
        $('form').on('submit', function(e) {
            const inputNominal = $('#gaji_nominal');
            inputNominal.val(inputNominal.val().replace(/[^0-9]/g, ''));
        });
    });
    </script>
</script>
@endpush

@endsection