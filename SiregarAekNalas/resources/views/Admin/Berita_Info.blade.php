@extends('Admin.Beranda')


@section('konten')
    <div class="containeri">
        <i class="fas fa-th fasi"></i> <span style="font-size: 50px; margin-left: 15px; font-family: Footlight MT;"> Tambah Berita</span>
        <hr>
    </div>
    <div class="containeri">
        <div class="containeri">
            <a href="/lihat" class="btn btn-primary"><i class="far fa-eye"></i> Lihat Semua berita</a>
            <a href="/BeritaK/{{ Auth::user()->id }}" class="btn btn-info">Ke Kategori</a>
        </div>
        <div class="container">
                <form action="/tambahInfo" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <label>Judul</label>
                    <input type="text" name="judul" class="form-control">
                    @if($errors->has('judul'))
                        <div class="text-danger" style="font-size:8px">
                            {{ $errors->first('judul')}}
                        </div>
                    @endif

                    <label>Kategori</label>
                    <select name="kategori" id="" class="form-control">
                        @foreach($Kategori as $k)
                            <option value="{{ $k->kategori }}">{{ $k->kategori }}</option>
                        @endforeach
                    </select>
                    @if($errors->has('kategori'))
                        <div class="text-danger" style="font-size:8px">
                            {{ $errors->first('kategori')}}
                        </div>
                    @endif

                    <label>Isi</label>
                    <textarea id="summernote" name="isi" class="" cols="30" rows="10"></textarea>
                    @if($errors->has('isi'))
                        <div class="text-danger" style="font-size:8px">
                            {{ $errors->first('isi')}}
                        </div>
                    @endif

                    <label>Gambar</label>
                    <input type="file" name="gambar" class="form-control">
                    @if($errors->has('gambar'))
                        <div class="text-danger" style="font-size:8px">
                            {{ $errors->first('gambar')}}
                        </div>
                    @endif

                    <label>Text</label>
                    <textarea name="teks" id="" class="form-control" cols="30" rows="3"></textarea>
                    @if($errors->has('teks'))
                        <div class="text-danger" style="font-size:8px">
                            {{ $errors->first('teks')}}
                        </div>
                    @endif <br>

                    <input type="submit" class="btn btn-success" value="+ Tambah Berita"><br>
                </form>
              </div>

    </div>
@include('sweetalert::alert')
@endsection
