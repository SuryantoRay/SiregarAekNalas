@extends('Pembeli.Beranda')

<?php
    function rupiah($angka) {
        $hasil = "Rp. ". number_format($angka, '2', ',', '.');
        return $hasil;
    }

    function sd($kata){
        $hasil = $kata;
        $k = substr($hasil, 0,210);
        return $k;
    }
?>


@section('konten')
<h1 style="padding: 10px;">Daftar Jualan</h1>

<hr>
    <div class="gambar">
    @foreach ($User as $u)
        @foreach ($u->barang as $b)
        <form action="/buy/{{ Auth::user()->id }}" method="post">
            @csrf
            <input type="hidden" name="id" value="{{ $b->id }}">
            <div class='foto'>
                <img src="{{ asset('Pembeli/BarangJualan/'.$b->gambar) }}">
                <h5>{{ $b->nama_produk }}</h5>
                <p>{{ rupiah($b->harga) }}</p>
                <input type="submit" class="btn btn-success"value="Beli Sekarang">
            </div>
        </form>
        @endforeach
    @endforeach
    </div>

@include('sweetalert::alert')
@endsection
