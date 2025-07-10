@extends('front.layout.main_front')

@section('content')
<div class="container mt-4">
    <h2>Tambah Rekam Medis</h2>

    <form action="{{ route('rekam_medis.store') }}" method="POST">
        @csrf
        <div class="mb-3"><label>Nama Pasien</label>
            <input type="text" name="nama_pasien" class="form-control" required>
        </div>

        <div class="mb-3"><label>Tanggal Kunjungan</label>
            <input type="date" name="tanggal_kunjungan" class="form-control" required>
        </div>

        <div class="mb-3"><label>Hari</label>
            <input type="text" name="hari"class="form-control"  required>    
        </div>

        <div class="mb-3"><label>Keluhan</label>
            <input type="text" name="keluhan" class="form-control" required>
        </div>

        <div class="mb-3"><label>Diagnosa</label>
            <input type="text" name="diagnosa" class="form-control"  required>
        </div>

        <div class="mb-3"><label>Tindakan</label>
            <input type="text" name="tindakan" class="form-control" required>
        </div>
         <div class="mb-3"><label>Resep Obat</label>
            <input type="text" name="resep_obat" class="form-control" required>
        </div>
         <div class="mb-3"><label>Nama Dokter</label>
            <input type="text" name="nama_dokter" class="form-control" required>
        </div>
         <div class="mb-3"><label>Catatan Tambahan</label>
            <input type="text" name="catatan_tambahan" class="form-control" required>
        </div>
       <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('rekam_medis.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection