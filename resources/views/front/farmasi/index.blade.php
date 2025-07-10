@extends('front.layout.main_front')

@section('content')

<div class="container mt-4">
   <h1 class="fw-bold text-success">Data Obat </h1>
    <p class="text-muted">Informasi Obar Rumah Sakit</p>

    <a href="{{ route('farmasi.create') }}" class="btn btn-success mb-3">+ Tambah Data Obat</a>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="table-dark text-center">
                <tr>
                    <th>No</th>
                    <th>Nama Obat</th>
                    <th>Kode</th>
                    <th>Jenis</th>
                    <th>Dosis</th>
                    <th>Stok</th>
                    <th>Harga Satuan</th>
                    <th>Tanggal Expired</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($farmasi as $index => $item)
                    <tr>
                        <td class="text-center">{{ $index + 1 }}</td>
                        <td>{{ $item->nama_obat }}</td>
                        <td>{{ $item->kode_obat }}</td>
                        <td>{{ $item->bentuk_sediaan }}</td>
                        <td>{{ $item->dosis }}</td>
                        <td class="text-end">{{ $item->stok }}</td>
                        <td class="text-end">Rp {{ number_format($item->harga_satuan, 2, ',', '.') }}</td>
                        <td class="text-center">{{ $item->expired_date }}</td>
                        <td>{{ $item->keterangan }}</td>
                        <td class="text-center">
                            <a href="{{ route('farmasi.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>

                            <form action="{{ route('farmasi.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                @csrf 
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="10" class="text-center">Data obat belum tersedia.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection
