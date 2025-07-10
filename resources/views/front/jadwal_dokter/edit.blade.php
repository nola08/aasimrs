@extends('front.layout.main_front')

@section('content')
<div class="container mt-4">
    <h2>Edit Jadwal Dokter</h2>
    <form action="{{ route('jadwal_dokter.update', $jadwal_dokter->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="mb-3">
            <label>Nama Dokter</label>
            <input type="text" name="Nama_Dokter" class="form-control" value="{{ $jadwal_dokter->Nama_Dokter }}" required>
        </div>
        <div class="mb-3">
            <label>Spesialis</label>
            <input type="text" name="Spesialis" class="form-control" value="{{ $jadwal_dokter->Spesialis }}" required>
        </div>
        <div class="mb-3">
            <label>Hari Praktek</label>
            <input type="text" name="Hari_Praktek" class="form-control" value="{{ $jadwal_dokter->Hari_Praktek }}" required>
        </div>
        <div class="mb-3">
            <label>Jam Mulai</label>
            <input type="time" name="Jam_Mulai" class="form-control" value="{{ $jadwal_dokter->Jam_Mulai }}" required>
        </div>
        <div class="mb-3">
            <label>Jam Selesai</label>
            <input type="time" name="Jam_Selesai" class="form-control" value="{{ $jadwal_dokter->Jam_Selesai }}" required>
        </div>
        <div class="mb-3">
            <label>Ruangan</label>
            <input type="text" name="Ruangan" class="form-control" value="{{ $jadwal_dokter->Ruangan }}" required>
        </div>
        <div class="mb-3">
            <label>Keterangan</label>
            <input type="text" name="keterangan" class="form-control" value = "{{ $jadwal_dokter->keterangan }}" required>
        </div>
        
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('jadwal_dokter.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
