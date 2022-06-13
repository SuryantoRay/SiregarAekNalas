@extends('Admin.Beranda')


@section('konten')
    <div class="containeri">
        <i class="fas fa-th fasi"></i> <span style="font-size: 50px; margin-left: 15px; font-family: Footlight MT;"> Tambah Berita</span>
        <hr>
    </div>
    <div class="containeri">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#kategori"> + Tambah Kategori</button>
        <a href="/Info/{{ Auth::user()->id }}" class="btn btn-info">Ke Berita</a>
    </div>

    <div class="containeri">
        <table class="table1">
            <tr>
                <th>Kategori</th>
                <th>Alias</th>
                <th>Aksi</th>
            </tr>
            @foreach($Kategori as $k)
                <tr>
                    <td>{{ $k->kategori }}</td>
                    <td>{{ $k->alias }}</td>
                    <td>
                        <a href="/hapusberita1/{{ $k->id }}" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin untuk Menghapus Kategori ini ?')"><i class="fas fa-trash-alt"></i> Hapus</a> |
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit{{ $k->id }}"><i class="fa fa-edit"></i> Edit</button>
                    </td>
                </tr>
            @endforeach
        </table> <br>
        <div class="container">
            <div class="row">
              <div class="col-sm">

              </div>
              <div class="col-sm">
                {{ $Kategori->links() }}
              </div>
              <div class="col-sm">

              </div>
            </div>
          </div>
    </div>

      {{-- tambah kategori --}}
  <div class="modal fade" id="kategori" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Tambah Kategori</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="/simpanBerita" method="post">
            {{ csrf_field() }}
            <table class="table">
                <tr>
                    <td>Kategori</td>
                    <td>:</td>
                    <td><input type="text" class="form-control" name="kategori" id="" placeholder="Masukkan Kategori ...."></td>
                </tr>
                <tr>
                    <td>Alias</td>
                    <td>:</td>
                    <td><input type="text" class="form-control" name="alias" id="" placeholder="Masukkan Alias ....."></td>
                </tr>
                <tr>
                    <td>Terbit</td>
                    <td>:</td>
                    <td>
                        <select class="form-control" name="terbit" id="">
                            <option value="">-- Pilih --</option>
                            <option value="1">Yes</option>
                            <option value="0">NO</option>
                        </select>
                    </td>
                </tr>
            </table>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <input type="submit" class="btn btn-primary" value="+ Tambah">
        </form>
        </div>
        </div>
    </div>
  </div>

   {{-- Edit kategori --}}
   @foreach($Kategori as $k)
   <div class="modal fade" id="edit{{ $k->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Edit Kategori</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="/EditBerita/{{ $k->id }}" method="post">
            {{ csrf_field() }}
            <table class="table">
                <tr>
                    <td>Kategori</td>
                    <td>:</td>
                    <td><input type="text" class="form-control" value="{{ $k->kategori }}" name="kategori" id=""></td>
                </tr>
                <tr>
                    <td>Alias</td>
                    <td>:</td>
                    <td><input type="text" class="form-control" value="{{ $k->alias }}" name="alias" id=""></td>
                </tr>
                <tr>
                    <td>Terbit</td>
                    <td>:</td>
                    <td>
                        <select class="form-control" name="terbit" id="">
                            <option value="{{ $k->terbit }}">
                                @if( $k->terbit == '1')
                                    Yes
                                @elseif( $k->terbit == '0')
                                    No
                                @endif
                            </option>
                            <option value="1">Yes</option>
                            <option value="0">NO</option>
                        </select>
                    </td>
                </tr>
            </table>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <input type="submit" class="btn btn-primary" value="Ubah">
        </form>
        </div>
        </div>
    </div>
  </div>
  @endforeach
@include('sweetalert::alert')
@endsection
