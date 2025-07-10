@extends('front.layout.main_front')
@section('content')
<h2 class="mb-4">sambutan Direktur Rumah Sakit</h2>

<div class="row align-items-center">
    <div class="col-md-6">
        <img src="{{ asset('img/hospital2.jpg') }}" alt="Rumah Sakit" class="img-fluid rounded shadow">
    </div>
    <div class="col-md-6 mt-4 mt-md-0">
        <p>
           sambutan Direktur RS
        </p>
        <ul>
            @foreach($sambutan as $item)
            <li>{{ $item->id }}</li>
            <li>{{ $item->nama_Direktur }}</li>
            <li>{{ $item->isi_sambutan }}</li>
            <li>{{ $item->tanggal }}</li>
            @endforeach
        </ul>
    </div>
    
@endsection