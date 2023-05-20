
  <!DOCTYPE html>
<html>
<head>
    <title>Cetak Rekam Medis</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            width: 800px;
            margin: 0 auto;
        }

        .header {
            margin-bottom: 20px;
        }

        .logo-container {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .logo {
            max-width: 100px;
            height: auto;
            margin-right: 20px;
        }

        .header h1 {
            font-size: 16px;
            margin-bottom: 5px;
        }

        .header p {
            font-size: 14px;
            margin: 0;
        }

        .address {
            margin-bottom: 20px;
        }

        .address p {
            margin: 0;
        }

        .form-group {
            margin-bottom: 14px;
        }

        .form-group label {
            display: inline-block;
            width: 120px;
            font-weight: bold;
        }

        .form-group .value {
            display: inline-block;
            width: calc(100% - 150px);
            vertical-align: top;
        }

        .separator {
            margin-bottom: 10px;
            border-top: 2px solid #000;
        }

        .signature {
            margin-top: 40px;
            text-align: right;
        }

        .signature p {
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
<div class="container">
        <div class="header">
            <div class="logo-container">
                <img class="logo" src="{{ asset('frontend/assets/img/klinik.png') }}" alt="Logo Rumah Sakit">
                <div>
                    <h1>Klinik Giri Usada</h1>
                    <p>Jl. Penjahitan No. 14, Nganjuk, Jawa Timur</p>
                </div>
            </div>
            <h1>Rekam Medis ID {{ $rekammedis->rekam_id }}</h1>
            <p>Nama Pasien: {{ $rekammedis->pasien_nama}}</p>
        </div>

        <div class="separator"></div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="signature">
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
                    <div class="signature">
                        <p>_________________________</p>
                        <p>Nganjuk,..-.....20...</p>
                    </div>

    <script>
        window.onload = function() {
            window.print();
        };
    </script>
</body>
</html>
