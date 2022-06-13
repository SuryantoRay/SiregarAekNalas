@extends('Pembeli.Beranda')

<?php
    function rupiah($angka) {
        $hasil = "Rp. ". number_format($angka, '2', ',', '.');
        return $hasil;
    }
?>

@section('konten')
<h1>Detail Pemesanan</h1>
@foreach($Barang as $b)
<div class="container px-lg-5">
    <div class="row mx-lg-n5">
      <div class="col py-3 px-lg-5 border bg-light">
        <img style="margin-bottom: 150px;" src="{{ asset('Pembeli/BarangJualan/'.$b->gambar) }}">
      </div>
      <div class="col py-3 px-lg-5 border bg-light">
        <h3><b>{{ $b->nama_produk }}</b></h3>
        <label style="font-size: 8px;"><i class="far fa-clock"></i>  {{ $b->created_at }}</label><br>
        <label for="">Deskripsi</label>
        <p>
            {{ $b->descripsi }}
        </p>
        <table>
            <form action="/beli/{{ Auth::user()->id }}" method="post">
                {{ csrf_field() }}
            <tr>
                <td></label> <label style="width: 100%" class="btn btn-warning"for="">Stok Yang Tersedia : {{ $b->stok }} </label></td>
                <td></label> <label style="width: 100%" class="btn btn-info"for="">Lakukan Pembelian Secara Jujur</label></td>
            </tr>
            <tr>
                <td style="color: transparent">a</td>
                <td style="color: transparent">a</td>
            </tr>
            <tr>
                <td>Masukkan Jumlah Pesanan :</td>
                <td><input type="number" name="jumlah_pesanan" class="form-control"></td>
            </tr>
            <tr>
                <td style="color: transparent">a</td>
                <td style="color: transparent">a</td>
            </tr>
            <tr>
                <td colspan="2">
                        <input type="hidden" name="harga" value="{{ $b->harga }}">
                        <input type="hidden" name="id_p" value="{{ auth::user()->pembeli->id }}">
                        <input type="hidden" name="stok" value="{{ $b->stok }}">
                        <input type="hidden" name="barang_id" value="{{ $b->id }}">
                        <button type="submit" style="width: 100%" class="btn btn-success"for=""><i class="fas fa-cart-plus"> {{ rupiah($b->harga)}}</i></button>
                    </form>
                    <i class="fa fa-arrow-circle-up" style="font-size: 8px; color:red; text-aligin: center;">Beli Sekarang </i>
                </td>
            </tr>
        </table>
      </div>
    </div>
  </div>
  <br><br>
@endforeach
@include('sweetalert::alert')
@endsection
