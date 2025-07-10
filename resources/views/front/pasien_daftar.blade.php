@extends('front.layout.main_front')
@section('content')

<div class="container mt-5">
    <h1 class="mb-4">pendaftaran pasien</h1>

    <form method="POST" action="{{ route('front.pasien_daftar.store') }}">
        @csrf
        <div class="mb-3">
            <label for="nama_pasien" class="form-label">Nama pasien</label>
            <input type="text" class="form-control" id="nama_pasien" name="nama_pasien" placeholder="Masukkan nama Anda">
         </div>
        <div class="mb-3">
            <label for="nik" class="form-label">Nik</label>
            <input type="text" class="form-control" id="nik" name="nik" placeholder="Masukkan nik Anda">
         </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat Anda">
         </div>
        <div class="mb-3">
            <label for="handphone" class="form-label">Handphone</label>
            <input type="text" class="form-control" id="handphone" name="handphone" placeholder="Masukkan Handphone Anda">
        </div>
        <div class="mb-3">
            <label for="tempat_lahir" class="form-label">Tempat lahir</label>
            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Masukkan Tempat lahirAnda">
        </div>
        <div class="mb-3">
            <label for="tangal_lahir" class="form-label">Tangal lahir</label>
            <input type="date" class="form-control" id="tangal_lahir" name="tangal_lahir" placeholder="Masukkan Tangal lahirAnda">
        </div>
        <div class="mb-3">
            <label for="jenis_layanan_kesehatan" class="form-label">Jenis layanan kesehatan</label>
            <input type="text" class="form-control" id="jenis_layanan_kesehatan" name="jenis_layanan_kesehatan" placeholder="Masukkan Jenis layanan kesehatanAnda">
        </div>
        <button type="submit" class="btn btn-primary">Kirim</button>
    </form>
</div>

@endsection