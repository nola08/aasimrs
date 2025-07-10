@extends('front.layout.main_front')

@section('content')
<div class="container mt-4">
    <h2>Tambah Data Obat</h2>
    <form action="{{ route('farmasi.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>nama_obat</label>
            <input type="text" name="nama_obat" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>kode_obat</label>
            <input type="text" name="kode_obat" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>bentuk_sediaan</label>
            <input type="text" name="bentuk_sediaan" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>dosis</label>
            <input type="text" name="dosis" class="form-control">
        </div>
        <div class="mb-3">
            <label>stok</label>
            <input type="text" name="stok" class="form-control" required min="0">
        </div>
        <div class="mb-3">
            <label>harga_satuan</label>
            <input type="text" name="harga_satuan" class="form-control">
        </div>
        <div class="mb-3">
            <label>expired_date</label>
            <input type="date" name="expired_date" class="form-control">
        </div>
        <div class="mb-3">
            <label>keterangan</label>
            <textarea name="keterangan" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('farmasi.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
