@extends('Pengusaha.Beranda')

@section('konten')
    <h1>Tambah Produk</h1> <br><br><br>
    @if(session('behasil'))
    <div class="alert alert-success alert-dismissible fade show container" role="alert">
        {{ session('berhasil') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <div class="row">
        <div class="col">
            <img class="img-responsive cc1" src="{{ asset('Pembeli/tambah_barang.jpg') }}" alt="">
        </div>
        <div class="col">
            @foreach ($User as $s)
            <form action="/pengusaha/tambah_produk/{{ $s->pengusaha->user_id }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <table class="table table-strip">
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td colspan="2"><input type="text" class="form-control" value="{{ old('nama_produk') }}" name="nama_produk" id="">
                            @if($errors->has('nama_produk'))
                                <div class="text-danger">
                                    {{ $errors->first('nama_produk')}}
                                </div>
                            @endif
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Harga</td>
                        <td>:</td>
                        <td colspan="2"><input type="number" name="harga" class="form-control" value="{{ old('harga') }}" id="">
                            @if($errors->has('harga'))
                                <div class="text-danger">
                                    {{ $errors->first('harga')}}
                                </div>
                            @endif
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Stok</td>
                        <td>:</td>
                        <td colspan="2"><input type="number" name="stok" class="form-control" value="{{ old('stok') }}" id="">
                            @if($errors->has('stok'))
                                <div class="text-danger">
                                    {{ $errors->first('stok')}}
                                </div>
                            @endif
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Description</td>
                        <td>:</td>
                        <td colspan="2"><textarea name="descripsi" value="{{ old('descripsi') }}" class="form-control" id="" cols="30" rows="10"></textarea>
                            @if($errors->has('descripsi'))
                                <div class="text-danger">
                                    {{ $errors->first('descripsi')}}
                                </div>
                            @endif
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Gambar</td>
                        <td>:</td>
                        <td><input type="file" class="form-file" name="gambar" id="">
                            @if($errors->has('gambar'))
                                <div class="text-danger">
                                    {{ $errors->first('gambar')}}
                                </div>
                            @endif
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><input type="submit" class="btn btn-primary" value="+ Upload"></td>
                    </tr>
                </table>
            </form>
            @endforeach
        </div>
    </div>
    @include('sweetalert::alert')
@endsection
