@extends('front.layout.main_front')

@section('content')

<div class="container mt-4">
   <h1 class="fw-bold text-success">🩺 JADWAL DOKTER</h1>
    <p class="text-muted">Informasi jadwal praktik Dokter Rumah Sakit</p>
    <hr class="border border-success border-2 opacity-75 w-50 mx-auto">

    <a href="{{ route('jadwal_dokter.create') }}" class="btn btn-success mb-3">+ Tambah Data Jadwal</a>

    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="table-dark text-center">
                <tr>
                    <th>No</th>
                    <th>Nama Dokter</th>
                    <th>Spesialis</th>
                    <th>Hari Praktek</th>
                    <th>Jam Praktik</th>
                    <th>Ruangan</th>
                    <th>keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($jadwal_dokter as $index => $item)
                    <tr>
                        <td class="text-center">{{ $index + 1 }}</td>
                        <td>{{ $item->Nama_Dokter }}</td>
                        <td>{{ $item->Spesialis }}</td>
                        <td>{{ $item->Hari_Praktek }}</td>
                        <td>{{ $item->Jam_Mulai }} - {{ $item->Jam_Selesai }}</td>
                        <td>{{ $item->Ruangan }}</td>
                        <td>{{ $item->keterangan }}</td>
                        <td class="text-center">
                            <a href="{{ route('jadwal_dokter.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>

                            <form action="{{ route('jadwal_dokter.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" class="text-center">Data jadwal dokter belum tersedia.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection
