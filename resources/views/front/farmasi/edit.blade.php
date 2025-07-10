@extends('front.layout.main_front')

@section('content')
<div class="container mt-4">
    <h2>Edit Data Obat</h2>
    <form action="{{ route('farmasi.update', $farmasi->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="mb-3">
            <label>nama_obat</label>
            <input type="text" name="nama_obat" class="form-control" value="{{ $farmasi->nama_obat }}" required>
        </div>
        <div class="mb-3">
            <label>kode_obat</label>
            <input type="text" name="kode_obat" class="form-control" value="{{ $farmasi->kode_obat }}" required>
        </div>
        <div class="mb-3">
            <label>bentuk_sediaan</label>
            <input type="text" name="bentuk_sediaan" class="form-control" value="{{ $farmasi->bentuk_sediaan }}" required>
        </div>
        <div class="mb-3">
            <label>dosis</label>
            <input type="text" name="dosis" class="form-control" value="{{ $farmasi->dosis }}">
        </div>
        <div class="mb-3">
            <label>stok</label>
            <input type="text" name="stok" class="form-control" value="{{ $farmasi->stok }}" required min="0">
        </div>
        <div class="mb-3">
            <label>harga_satuan</label>
            <input type="text" name="harga_satuan" class="form-control" value="{{ $farmasi->harga_satuan }}">
        </div>
        <div class="mb-3">
            <label>expired_date</label>
            <input type="date" name="expired_date" class="form-control" value="{{ $farmasi->expired_date }}">
        </div>
        <div class="mb-3">
            <label>keterangan</label>
            <textarea name="keterangan" class="form-control">{{ $farmasi->keterangan }}</textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('farmasi.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
