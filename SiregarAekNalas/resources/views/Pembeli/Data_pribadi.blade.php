@extends('Pembeli.Beranda')

@section('konten')
    <h1>Data Pribadi</h1>
    @foreach ($User as $p)
    <div class="containeri">
        <div class="row">
            <div class="col-4">
                @if ($p->pembeli->file == "-" || $p->pembeli->file == "")
                    <img class="user" src="{{ asset('Beranda/user.png') }}">
                @else
                    <img class="user" src="{{ asset('Pembeli/user/'.$p->pembeli->file) }}" alt="">
                @endif
            </div>
            <div class="col-8">
                <div class="conten1">
                    <table class="table">
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td>{{ $p->pembeli->nama }}</td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td>
                            <td>:</td>
                            <td>{{ $p->pembeli->tanggal_lahir }}</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td>{{ $p->alamat }}</td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>:</td>
                            <td>
                                @if( $p->jenis_kelamin == 'L')
                                    Laki-Laki
                                @elseif( $p->jenis_kelamin == 'P')
                                    Perempuan
                                @endif
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="conten2">
                    <table class="table">
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td>{{ $p->email }}</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>No Handphone</td>
                            <td>:</td>
                            <td>{{ $p->pembeli->no_handphone }}</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Whatsapp</td>
                            <td>:</td>
                            <td>{{ $p->pembeli->whatsapps }}</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <button type="button" class="btn btn-primary fa fa-edit" data-toggle="modal" data-target="#edit_gambar">Gambar</button>
                                <button type="button" class="btn btn-success fa fa-edit" data-toggle="modal" data-target="#edit_data">Edit</button>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    {{-- Edit Gambar --}}
  <div class="modal fade" id="edit_gambar" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Edit Gambar</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            @if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach ($errors->all() as $error)
					{{ $error }} <br/>
					@endforeach
				</div>
			@endif
            <form action="/editGambar/{{ $p->pembeli->user_id }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="file" name="file">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" value="Upload">
                </div>
            </form>
        </div>
    </div>
  </div>
  {{-- Edit data Pribadi --}}
  <div class="modal fade" id="edit_data" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Edit Data</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            @if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach ($errors->all() as $error)
					{{ $error }} <br/>
					@endforeach
				</div>
			@endif
            <form action="/editData/{{ $p->pembeli->user_id }}" method="post">
                {{ csrf_field() }}
                <table class="table">
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><input type="text" class="form-control" name="nama" value="{{ $p->pembeli->nama }}" class="" id=""></td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>:</td>
                        <td><input type="date" class="form-control" name="tanggal_lahir" value="{{ $p->pembeli->tanggal_lahir }}" class="" id=""></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><input type="text" class="form-control" name="alamat" value="{{ $p->alamat }}" class="" id=""></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td><select class="form-control" name="jenis_kelamin" id="">
                            <option value="{{ $p->jenis_kelamin}}">{{ $p->jenis_kelamin}}</option>
                            <option value="L">Laki-Laki</option>
                            <option value="P">Perempuan</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td>No Handphone</td>
                        <td>:</td>
                        <td><input type="text" class="form-control" name="no_handphone" value="{{ $p->pembeli->no_handphone }}" class="" id=""></td>
                    </tr>
                    <tr>
                        <td>Whatsapp</td>
                        <td>:</td>
                        <td><input type="text" class="form-control" name="whatsapps" value="{{ $p->pembeli->whatsapps }}" class="" id=""></td>
                    </tr>
                </table>
        </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" value="Save">
                </div>
            </form>
        </div>
    </div>
  </div>
  @endforeach
  @include('sweetalert::alert')
@endsection
