@extends('Informasi.Informasi_master')

@section('jumlah_halaman', 'Beranda')

@section('konten')
<div class="container gallery-container">
    <center><img src="{{ asset('Beranda/berita.jpeg') }}" class="foto" alt=""></center>
    @foreach ($Baca as $b)
        <table>
            <tr>
                <td colspan="3"><h1>{{ $b->judul }}</h1></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <label style="font-size: 8px;"><i class="far fa-clock"></i>  {{ $b->created_at }}</label><br>
                    <img style="width: 900px; height: 450px;" src="{{ asset('Admin/Berita/'.$b->gambar) }}" alt="">
                </td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <p>
                        {!! $b->isi !!}
                    </p>
                </td>
                <td></td>
            </tr>
        </table>
    @endforeach
</div>


@endsection
