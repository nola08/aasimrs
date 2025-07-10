@extends('front.layout.main_front')

@section('content')
<div class="container mt-4">
    <h2>Tambah Jadwal Dokter</h2>
    <form action="{{ route('jadwal_dokter.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nama Dokter</label>
            <input type="text" name="Nama_Dokter" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Spesialis</label>
            <input type="text" name="Spesialis" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Hari Praktek</label>
            <input type="text" name="Hari_Praktek" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Jam Mulai</label>
            <input type="time" name="Jam_Mulai" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Jam Selesai</label>
            <input type="time" name="Jam_Selesai" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Ruangan</label>
            <input type="text" name="Ruangan" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Keterangan</label>
            <textarea name="Keterangan" class="form-control"></textarea required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('jadwal_dokter.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
