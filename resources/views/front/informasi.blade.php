@extends('front.layout.main_front')
@section('content')

<h2 class="mb-4">Profil Rumah Sakit</h2>

<div class="row align-items-center">
    <div class="col-md-6">
        <img src="{{ asset('images/rumah_sakit.jpg') }}" alt="Rumah Sakit" class="img-fluid rounded shadow">
    </div>
    <div class="col-md-6 mt-4 mt-md-0">
        <p>
            Rumah Sakit Sehat Selalu adalah institusi pelayanan kesehatan yang menyediakan layanan medis profesional 
            dengan dukungan teknologi mutakhir dan tenaga medis yang berkompeten.
        </p>
        <ul>
            <li>Didirikan sejak tahun 2000</li>
            <li>Memiliki lebih dari 30 spesialisasi medis</li>
            <li>Tersertifikasi akreditasi nasional KARS</li>
        </ul>
    </div>
</div>

@endsection