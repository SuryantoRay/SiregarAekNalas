@extends('Pengusaha.Beranda')

<?php
    function rupiah($angka) {
        $hasil = "Rp. ". number_format($angka, '2', ',', '.');
        return $hasil;
    }
?>

@section('konten')
    <h1>Edit Produk</h1>
    @foreach($User as $b)
        <div class="row row-cols-1 conten">
            <div class="ii row">
                <div class="col-3">
                    <img src="{{ asset('Pembeli/BarangJualan/'.$b->gambar) }}"  class="editimg" alt="">
                </div>
                <div class="col-9">
                    <form action="" method="post">
                        <table class="table">
                            <tr>
                                <td>Nama</td>
                                <td>:</td>
                                <td>{{ $b->nama_produk }}</td>
                                <td colspan="2"></td>
                            </tr>
                            <tr>
                                <td>Harga</td>
                                <td>:</td>
                                <td>{{ rupiah($b->harga) }}</td>
                                <td colspan="2"></td>
                            </tr>
                            <tr>
                                <td>Stok</td>
                                <td>:</td>
                                <td>{{ $b->stok }}</td>
                                <td colspan="2"></td>
                            </tr>
                            <tr>
                                <td>descrpsi</td>
                                <td>:</td>
                                <td>{{ $b->descripsi }}</td>
                                <td colspan="2"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td  colspan="2">
                                    <button type="button" style="color: black;" class="btn btn-warning fa fa-edit" data-toggle="modal" data-target="#edit_gambarP{{ $b->id }}">  Gambar</button>
                                    <button type="button" style="color: black;" class="btn btn-success fa fa-edit" data-toggle="modal" data-target="#edit_produk{{ $b->id }}">  Edit</button>
                                    <a href="/hapus/{{ $b->id }}" style="color: black;" class="btn btn-danger fas fa-trash-alt" onclick="return confirm('Apakah Anda Yakin untuk Menghapus-nya ?')">  Hapus</a>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
        {{-- Edit Produk --}}
  <div class="modal fade" id="edit_produk{{ $b->id }}" tabdata-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Edit Produk</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="/edit/{{ $b->id }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <table class="table">
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><input type="text" value="{{ $b->nama_produk }}" class="form-control" name="nama_produk"></td>
                    </tr>
                    <tr>
                        <td>Harga</td>
                        <td>:</td>
                        <td><input type="number" value="{{ $b->harga }}" class="form-control" name="harga"></td>
                    </tr>
                    <tr>
                        <td>Stok</td>
                        <td>:</td>
                        <td><input type="number" value="{{ $b->stok }}" class="form-control" name="stok"></td>
                    </tr>
                    <tr>
                        <td>Descripsi</td>
                        <td>:</td>
                        <td><textarea name="descripsi" id="" cols="30" class="form-control" rows="10">{{ $b->descripsi }}</textarea></td>
                    </tr>
                </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" value="Upload">
                </div>
            </form>
        </div>
    </div>
  </div>
  {{-- Edit Gambar --}}
  <div class="modal fade" id="edit_gambarP{{ $b->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Edit Gambar</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <table class="table">
            <tr>
                <td>Gambar</td>
                <td>:</td>
                <td>
                    <form action="/editgambarP/{{ $b->id }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <img src="{{ asset('Pembeli/BarangJualan/'.$b->gambar) }}" class="editimga" alt="">
                        <input type="file" name="gambar"  id="">
                        @if($errors->has('gambar'))
                                <div class="text-danger">
                                    {{ $errors->first('gambar')}}
                                </div>
                        @endif
                </td>
            </tr>
        </table>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <input type="submit" class="btn btn-primary" value="Upload">
        </form>
        </div>
        </div>
    </div>
  </div>
        @endforeach
        <div class="container">
            <div class="row">
              <div class="col-sm">

              </div>
              <div class="col-sm">
                {{ $User->links() }}
              </div>
              <div class="col-sm">

              </div>
            </div>
    @include('sweetalert::alert')
@endsection

