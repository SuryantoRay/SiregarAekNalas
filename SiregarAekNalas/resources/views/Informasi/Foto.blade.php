@extends('Informasi.Informasi_master')

@section('jumlah_halaman', 'Beranda')


@section('konten')

<div class="container gallery-container">

    <center><img src="{{ asset('Beranda/foto.jpeg') }}" class="foto" alt=""></center>

    <div class="tz-gallery">

        <div class="row">
            @foreach ($Gambar as $g)
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="{{ asset('Admin/Gambar/'.$g->gambar) }}">
                    <img src="{{ asset('Admin/Gambar/'.$g->gambar) }}" alt="Park">
                </a>
            </div>
            @endforeach
        </div>

    </div>

</div>

@endsection
