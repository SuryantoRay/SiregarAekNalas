@extends('Pengusaha.Beranda')

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
    <h1 style="padding: 10px;">Ulos Batak</h1>

    <hr>
    <div class="row row-cols-3" style="padding-left: 10px; padding-right: 10px;">
        @foreach (Auth::user()->barang as $u)
            <div class="col">
                <div>
                    <center><img class="home" src="{{ asset('Pembeli/BarangJualan/'.$u->gambar) }}" alt=""></center>
                </div>
                <div>
                    <center><h5>{{ $u->nama_produk }}</h5></center>
                    <center><label style="width: 30%" class="btn btn-success" for="">{{ rupiah($u->harga) }}</label> <label style="width: 30%" class="btn btn-warning"for="">Stok : {{ $u->stok }}</label></center>
                    <p style="">
                        {{ sd($u->descripsi) }}
                        <a href="" data-toggle="modal" data-target="#data{{ $u->id }}">Baca Selengkapnya ....</a>
                    </p>
                </div>
            </div>
        @endforeach
    </div>
    {{-- Data Lengkap --}}
    @foreach (Auth::user()->barang as $u)
    <div class="modal fade" id="data{{ $u->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">{{ $u->nama_produk }}</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-dialog modal-dialog-scrollable">
                <table class="table">
                    <tr>
                        <td colspan="3">
                            <center><img class="home" src="{{ asset('Pembeli/BarangJualan/'.$u->gambar) }}" alt=""></center>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            {{ $u->descripsi }}
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><label style="width: 70%" class="btn btn-success" for="">{{ rupiah($u->harga) }}</label></td>
                        <td></label> <label style="width: 70%" class="btn btn-warning"for="">Stok : {{ $u->stok }}</label></td>
                    </tr>
                </table>
              </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </form>
            </div>
            </div>
        </div>
      </div>
      @endforeach
    @include('sweetalert::alert')
@endsection
