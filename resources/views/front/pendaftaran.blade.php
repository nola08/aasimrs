
@extends('front.layout.main_front')
@section('content')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMRS</title>

    <style>
        body {
        font-family: sans-serif;
        margin: 20px;
        background-color: #f4f4f4;
    }
    
    .container {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        max-width: 800px;
        margin: 0 auto;
    }
    
    h1 {
        text-align: center;
        color: #333;
        margin-bottom: 20px;
    }
    
    .steps-container {
        display: flex;
        justify-content: flex-start;
        margin-bottom: 20px;
        border-bottom: 2px solid #ddd;
        padding-bottom: 10px;
    }
    
    .step {
        display: flex;
        align-items: center;
        margin-right: 30px;
        color: #777;
    }
    
    .step.active {
        color: #1e88e5;
    }
    
    .step-number {
        background-color: #ddd;
        color: #777;
        border-radius: 50%;
        width: 30px;
        height: 30px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-right: 10px;
        font-weight: bold;
    }
    
    .step.active .step-number {
        background-color: #1e88e5;
        color: #fff;
    }
    
    .step-title {
        font-weight: bold;
    }
    
    .content-container {
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 5px;
        background-color: #f9f9f9;
    }
    
    .step-content {
        display: none;
    }
    
    .step-content.active {
        display: block;
    }
    
    .step-content h2 {
        color: #333;
        margin-top: 0;
    }
    
    .step-content ol {
        padding-left: 20px;
    }
    
    .step-content li {
        margin-bottom: 10px;
        color: #555;
    }
    </style>
</head>
<body>
    <div class="container">
        <h1>Formulir Pendaftaran PPDB Online MTsN 3 Kota Pekanbaru</h1>
        <div class="steps-container">
            <div class="step active">
                <div class="step-number">1</div>
                <div class="step-title">Ketentuan</div>
            </div>
            <div class="step">
                <div class="step-number">2</div>
                <div class="step-title">Siswa</div>
            </div>
            <div class="step">
                <div class="step-number">3</div>
                <div class="step-title">Konfirmasi</div>
            </div>
        </div>

        <div class="content-container">
            <div class="step-content active">
                <h2>Ketentuan PPDB MTsN 3 Kota Pekanbaru</h2>
                <p>Unit MTsN 3 Kota Pekanbaru Tahun Ajaran 2025-2026</p>
                <ol>
                    <li>Setiap calon siswa wajib mengisi formulir pendaftaran dengan lengkap.</li>
                    <li>Data-data yang diisikan pada form PPDB Online harus sesuai dengan data asli dan benar adanya.</li>
                    <li>Siapkan nilai rapor semester I dan II untuk pengisian kolom nilai yang akan dimasukkan dalam form isian nilai rapor pada PPDB Online.</li>
                    <li>Calon siswa yang sudah mendaftarkan secara online akan mendapatkan Nomor Pendaftaran yang harus dicetak dan dilampirkan dalam persyaratan yang diminta oleh Panitia PPDB MTsN 3 Kota Pekanbaru.</li>
                    <li>Pastikan nomor telepon dan alamat email yang diisikan aktif dan benar karena segala informasi terkait PPDB akan dikirimkan melalui nomor telepon dan alamat email tersebut.</li>
                    <li>Calon siswa yang sudah melakukan pendaftaran online wajib melakukan verifikasi berkas ke MTsN 3 Kota Pekanbaru sesuai dengan jadwal yang akan diumumkan kemudian.</li>
                    <li>Berkas-berkas yang harus dibawa saat verifikasi akan diumumkan kemudian.</li>
                </ol>
            </div>
            <div class="step-content">
                <h2>Formulir Data Siswa</h2>
                <p>Ini adalah contoh tampilan untuk langkah pengisian data siswa.</p>
                </div>
            <div class="step-content">
                <h2>Konfirmasi Pendaftaran</h2>
                <p>Ini adalah contoh tampilan untuk langkah konfirmasi pendaftaran.</p>
                </div>
        </div>
    </div>
</body>
</html>

@endsection