@extends('front.layout.main_front')

@section('content')
<div class="container mt-4">
    <h2>Edit Rekam Medis</h2>

    {{-- Debug ID untuk memastikan tidak null --}}
    <p><strong>ID Rekam Medis:</strong> {{ $rekam_medis->id ?? 'NULL' }}</p>

    <form action="{{ route('rekam_medis.update', $rekam_medis->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nama Pasien</label>
            <input type="text" name="nama_pasien" class="form-control" value="{{ $rekam_medis->nama_pasien }}" required>
        </div>

        <div class="mb-3">
            <label>Tanggal Kunjungan</label>
            <input type="date" name="tanggal_kunjungan" class="form-control" value="{{ $rekam_medis->tanggal_kunjungan }}" required>
        </div>

        <div class="mb-3">
            <label>Hari</label>
            <input type="text" name="hari" class="form-control" value="{{ $rekam_medis->hari }}" required>
        </div>

        <div class="mb-3">
            <label>Keluhan</label>
            <input type="text" name="keluhan" class="form-control" value="{{ $rekam_medis->keluhan }}" required>
        </div>

        <div class="mb-3">
            <label>Diagnosa</label>
            <input type="text" name="diagnosa" class="form-control" value="{{ $rekam_medis->diagnosa }}" required>
        </div>

        <div class="mb-3">
            <label>Tindakan</label>
            <input type="text" name="tindakan" class="form-control" value="{{ $rekam_medis->tindakan }}" required>
        </div>

        <div class="mb-3">
            <label>Resep Obat</label>
            <input type="text" name="resep_obat" class="form-control" value="{{ $rekam_medis->resep_obat }}" required>
        </div>

        <div class="mb-3">
            <label>Nama Dokter</label>
            <input type="text" name="nama_dokter" class="form-control" value="{{ $rekam_medis->nama_dokter }}" required>
        </div>

        <div class="mb-3">
            <label>Catatan Tambahan</label>
            <input type="text" name="catatan_tambahan" class="form-control" value="{{ $rekam_medis->catatan_tambahan }}" required>
        </div>

        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('rekam_medis.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection