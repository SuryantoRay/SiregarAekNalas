@extends('Pembeli.Beranda')

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
            <form action="/hapusPesanan/{{ $p->id }}" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="stok" value="{{ $p->stok }}" />
                <input type="hidden" name="id_barang" value="{{ $p->id_barang }}" />
                <tr>
                    <td><img src="{{ asset('Pembeli/BarangJualan/'.$p->gambar) }}"></td>
                    <td>{{ $p->nama_produk }}</td>
                    <td>{{ rupiah($p->harga) }}</td>
                    <td>
                        <input type="hidden" name="jumlah_pesanan" value="{{ $p->jumlah_pesanan }}">
                        {{ $p->jumlah_pesanan }}
                    </td>
                    <td>{{ rupiah($p->total) }}</td>
                    <td><button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin untuk Menghapusnya ?')" for="">X</button></td>
                </tr>
            </form>
            @endforeach
        </table>
    </div>
    @include('sweetalert::alert')
@endsection
