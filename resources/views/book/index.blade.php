@extends('layouts.admin')
@section('content')
    <h3 class="ml-3">Book Page <br><br>
@foreach ($book as $data)
    Title      : {{ $data->nama_buku }} <br>
    Page       : {{ $data->jumlah_halaman }} <br>    
    Translate  : {{ $data->translate_judul_buku }} <br>   
    Created Ad : {{ $data->created_ad ?? 'Belum Ada Data' }} <br>   
    <hr> 
@endforeach
    </h3>

@endsection