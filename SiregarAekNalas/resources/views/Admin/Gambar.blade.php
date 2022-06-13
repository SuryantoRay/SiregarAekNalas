@extends('Admin.Beranda')


@section('konten')
    <div class="containeri">
        <i class="fas fa-camera-retro fasi"></i> <span style="font-size: 50px; margin-left: 15px; font-family: Footlight MT;"> Masukkan Gambar</span>
        <hr>
    </div>
    <div class="containeri">
        <form action="/gambarEDP" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
                <label>Nama</label>
                <input type="text" name="nama" class="form_login" value="" placeholder="Masukkan Judul Gambar ....">

                <label>Gambar</label>
                <input type="file" name="gambar" class="form_login">

                <button type="submit" class="asil2">+ Upload</button>
        </form>
        <hr>
        <table class="table1">
            <tr>
                <th>Nama</th>
                <th>Gambar</th>
                <th>Opsi</th>
            </tr>
            @foreach ($Gambar as $g)
                <tr>
                    <td>{{ $g->nama }}</td>
                    <td><img src="{{ asset('Admin/Gambar/'.$g->gambar) }}" class="hhhh" alt=""></td>
                    <td>
                        <button type="button" style="color: black;" class="btn btn-warning fa fa-edit" data-toggle="modal" data-target="#edit_gambar{{ $g->id }}">  Edit</button> |
                        <a href="/hapusGM/{{ $g->id }}" onclick="return confirm('Apakah Anda Yakin untuk Menghapus Gambar INi ?')" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

    @foreach ($Gambar as $g)
    <div class="modal fade" id="edit_gambar{{ $g->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">Edit Gambar</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/editEGH/{{ $g->id }}" method="post" enctype="multipart/form-data"  style="padding: 10px 10px 10px 10px;">
                {{ csrf_field() }}
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" value="{{ $g->nama }}">

                    <label>Gambar</label>
                    <input type="file" name="gambar" class="form-control"> <br>
                    <img src="{{ asset('Admin/Gambar/'.$g->gambar) }}" class="hhhh" alt="">

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
            {{ $Gambar->links() }}
          </div>
          <div class="col-sm">

          </div>
        </div>
      </div>
@include('sweetalert::alert')
@endsection
