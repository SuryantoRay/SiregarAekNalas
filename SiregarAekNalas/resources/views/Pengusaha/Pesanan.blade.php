@extends('Pengusaha.Beranda')

<?php
    function rupiah($angka) {
        $hasil = "Rp. ". number_format($angka, '2', ',', '.');
        return $hasil;
    }
?>

@section('konten')
<h1>Daftar Pesanan</h1>
    <div style="padding: 5px 10px 5px 10px;">
        <table class="table table-bordered">
            <tr>
                <th>Gambar</th>
                <th>Item</th>
                <th>Harga</th>
                <th>Stok Pesanan</th>
                <th>Total</th>
                <th>Hapus</th>
            </tr>
            @foreach($Pesanan as $p)
            <form action="/hapusPesanann/{{ $p->id }}" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="stok" value="{{ $p->stok }}" />
                <input type="hidden" name="id_barang" value="{{ $p->barang_id }}" />
                <input type="hidden" name="id" value="{{ $p->id_ps }}" />
                <tr>
                    <td><img src="{{ asset('Pembeli/BarangJualan/'.$p->gambar) }}"></td>
                    <td>{{ $p->nama_produk }}</td>
                    <td>{{ rupiah($p->harga) }}</td>
                    <td>
                        <input type="hidden" name="jumlah_pesanan" value="{{ $p->jumlah_pesanan }}">
                        {{ $p->jumlah_pesanan }}
                    </td>
                    <td>{{ rupiah($p->total) }}</td>
                    <td>
                        <button type="button" class="fa fa-check-circle btn btn-success" data-toggle="modal" data-target="#edit_produk{{ $p->id }}"></button>
                        <button type="submit" class="far fa-calendar-times btn btn-danger" onclick="return confirm('Apakah Anda Yakin untuk Menghapusnya ?')" for=""></button>
                    </td>
                </tr>
            </form>
            @endforeach
        </table>
    </div>

    {{-- Edit Produk --}}
    @foreach($Pesanan as $p)
  <div class="modal fade" id="edit_produk{{ $p->id }}" tabdata-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Jika Barang Telah Lunas Tekan Tombol <b><i>Telah Lunas</i></b>, jika belum silahkan tekan tombol <b><i>Close</b></i></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="/lunas/{{ $p->id_ps }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <table class="table">
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td>{{ $p->nama_produk }}</td>
                    </tr>
                    <tr>
                        <td>Harga</td>
                        <td>:</td>
                        <td>{{ $p->harga }}</td>
                    </tr>
                    <tr>
                        <td>Stok</td>
                        <td>:</td>
                        <td>{{ $p->stok }}</td>
                    </tr>
                    <tr>
                        <td>Jumlah Pesanan</td>
                        <td>:</td>
                        <td>{{ $p->jumlah_pesanan }}</td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td>:</td>
                        <td>{{ rupiah($p->total) }}</td>
                    </tr>
                </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-success" onclick="return confirm('Apakah Barang Telah Dibayar Lunas ?')" value="Telah Lunas">
                </div>
            </form>
        </div>
    </div>
  </div>
  @endforeach

@include('sweetalert::alert')
@endsection
