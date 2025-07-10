@extends('front.layout.main_front')
@section('content')

<h1>Informasi kamar Rumah Sakit</h1>

@foreach ($kamar as $item)
    {{$item->id}} <br>
    nomor_kamar : {{ $item->nomor_kamar }} <br>
    tipe_kamar : {{$item->tipe_kamar}} <br>
    harga: {{$item->harga}} <br>
    status : {{$item->status}} <br>
    deskripsi : {{$item->deskripsi}} <br>
    tanggal_dibuat : {{$item->tanggal_dibuat}} <br>
@endforeach

@endsection