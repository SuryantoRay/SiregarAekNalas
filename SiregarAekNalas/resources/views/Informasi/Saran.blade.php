<!-- Menghubungkan dengan view template master -->
@extends('Informasi.Informasi_master')

@section('jumlah_halaman', 'Beranda')
<?php
    $uri = $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']
?>


@section('konten')

    <div class="saran1">
        <div>
            <img  class="w-50 " src="{{ asset('Beranda/saran1.jpg') }}" alt=""><img src="{{ asset('Beranda/saran2.jpg') }}" class="w-50" alt="">
        </div>
        <div class="tz-gallery">
            <center>
            <h1>Silahkan Masukkan Komentar Anda</h1>
            <div class="fb-comments" data-href="{{ $uri }} " data-numposts="5" data-width=""></div>
            </center>
        </div>
    </div>

@endsection
