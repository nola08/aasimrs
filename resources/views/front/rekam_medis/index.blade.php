@extends('front.layout.main_front')

@section('content')
<div class="container mt-4">
    <h2 class="mb-3">Rekam Medis 💊</h2>

    <a href="{{ route('rekam_medis.create') }}">➕ Tambah rekam_medis</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead class="table-light">
            <tr>
                <th>No</th>
                <th>👤 nama_pasien</th>
                <th>tanggal_kunjungan</th>
                <th>Hari</th>
                <th>keluhan</th>
                <th>diagnosa</th>
                <th>tindakan</th>
                <th>resep_obat</th>
                <th>nama_dokter</th>
                <th>catatan_tambahan</th>
                <th>⚙Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($rekam_medis as $index => $rekam_medis)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $rekam_medis->nama_pasien }}</td>
                    <td>{{ $rekam_medis->tanggal_kunjungan }}</td>
                    <td>{{ $rekam_medis->hari }}</td>
                    <td>{{ $rekam_medis->keluhan}}</td>
                    <td>{{ $rekam_medis->diagnosa }}</td>
                    <td>{{ $rekam_medis->tindakan}}</td>
                    <td>{{ $rekam_medis->resep_obat}}</td>
                    <td>{{ $rekam_medis->nama_dokter}}</td>
                    <td>{{ $rekam_medis->catatan_tambahan}}</td>
                    <td>
                        <a href="{{ route('rekam_medis.edit', $rekam_medis->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    
                        <form action="{{ route('rekam_medis.destroy', $rekam_medis->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Yakin ingin menghapus data ini?')" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="" class="text-center">Tidak ada data rekam_medis.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection