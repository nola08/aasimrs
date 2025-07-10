@extends('front.layout.main_front') {{-- Menggunakan layout aplikasi yang mungkin sudah ada --}}

@section('content')
<div class="container mt-4">
    <h1 class="text-center mb-5">Sistem Informasi Manajemen Rumah Sakit</h1>

    <div class="card mb-4">
        <div class="card-header bg-primary text-white">
            Informasi Rumah Sakit
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <p><strong>Nama Rumah Sakit:</strong> RS Sehat Selalu</p>
                    <p><strong>Alamat:</strong> Jl. Melati No. 10, Pekanbaru</p>
                    <p><strong>Nomor Telepon:</strong> (0761) 123456</p>
                    <p><strong>Email:</strong> info@rssehatselalu.com</p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('img/hospital.jpg') }}" alt="Gambar Rumah Sakit" class="img-fluid rounded shadow-sm">
                </div>
            </div>
        </div>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4 mb-5">
        <div class="col">
            <div class="card h-100 shadow-sm">
                <div class="card-body text-center">
                    <i class="bi bi-heart-pulse-fill text-primary fs-2 mb-2"></i>
                    <h5 class="card-title">Pendaftaran Pasien</h5>
                    <p class="card-text">Formulir pendaftaran pasien baru dan lama.</p>
                    <a href="{{ url('pendaftaran') }}" class="btn btn-primary btn-sm">Lihat Formulir</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 shadow-sm">
                <div class="card-body text-center">
                    <i class="bi bi-list-check text-success fs-2 mb-2"></i>
                    <h5 class="card-title">Jadwal Dokter</h5>
                    <p class="card-text">Informasi lengkap mengenai jadwal praktik dokter spesialis.</p>
                    <a href="{{ url('jadwal_dokter') }}" class="btn btn-success btn-sm">Lihat Jadwal</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 shadow-sm">
                <div class="card-body text-center">
                    <i class="bi bi-hospital-fill text-info fs-2 mb-2"></i>
                    <h5 class="card-title">Informasi Kamar</h5>
                    <p class="card-text">Ketersediaan dan status kamar rawat inap.</p>
                    <a href="{{ route('kamar.index') }}" class="btn btn-info btn-sm">Lihat Ketersediaan</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 shadow-sm">
                <div class="card-body text-center">
                    <i class="bi bi-prescription2 text-warning fs-2 mb-2"></i>
                    <h5 class="card-title">Farmasi</h5>
                    <p class="card-text">Informasi obat-obatan dan layanan farmasi.</p>
                    <a href="{{ url('farmasi') }}" class="btn btn-warning btn-sm">Akses Farmasi</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 shadow-sm">
                <div class="card-body text-center">
                    <i class="bi bi-cash-coin text-secondary fs-2 mb-2"></i>
                    <h5 class="card-title">Pembayaran</h5>
                    <p class="card-text">Informasi tagihan dan metode pembayaran.</p>
                    <a href="{{ url('pembayaran') }}" class="btn btn-secondary btn-sm">Lihat Tagihan</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 shadow-sm">
                <div class="card-body text-center">
                    <i class="bi bi-file-earmark-medical-fill text-danger fs-2 mb-2"></i>
                    <h5 class="card-title">Rekam Medis</h5>
                    <p class="card-text">Akses rekam medis pasien (membutuhkan otentikasi).</p>
                    <a href="{{ route('rekam-medis.index') }}" class="btn btn-danger btn-sm">Akses Rekam Medis</a>

                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <h3>Hubungi Kami</h3>
            <p>Jika Anda memiliki pertanyaan atau membutuhkan bantuan, jangan ragu untuk menghubungi kami melalui informasi di bawah ini:</p>
            <ul class="list-unstyled">
                <li><i class="bi bi-telephone-fill me-2"></i> (0761) 123456</li>
                <li><i class="bi bi-envelope-fill me-2"></i> info@rssehatselalu.com</li>
                <li><i class="bi bi-clock-fill me-2"></i> Buka 24 Jam</li>
            </ul>
        </div>
        <div class="col-md-6">
            <h3>Lokasi Kami</h3>
            <div class="ratio ratio-16x9">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.784897897898!2d101.4457609747895!3d0.516749994987456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d5a98a7c7c7c7d%3A0x8e3e3e3e3e3e3e3e!2sRumah+Sakit+Sehat+Selalu!5e0!3m2!1sid!2sid!4v1633030303030!5m2!1sid!2sid" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</div>
@endsection