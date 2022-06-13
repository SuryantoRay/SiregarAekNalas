@extends('Admin.Beranda')


@section('konten')
    <div class="containeri">
        <i class="fas fa-th fasi"></i> <span style="font-size: 50px; margin-left: 15px; font-family: Footlight MT;"> Edit Berita</span>
        <hr>
    </div>
    <div class="containeri">
        <div class="containeri">
            <a href="/lihat" class="btn btn-primary"><i class="far fa-eye"></i> Lihat Semua berita</a>
        </div>
        <div class="container">
                @foreach ($Berita as $b)
                <form action="/eeee5/{{ $b->id }}" method="post">
                    {{ csrf_field() }}

                    <label>Judul</label>
                    <input type="text" name="judul" class="form-control" value="{{ $b->judul }}">
                    @if($errors->has('judul'))
                        <div class="text-danger" style="font-size:8px">
                            {{ $errors->first('judul')}}
                        </div>
                    @endif

                    @if($errors->has('kategori'))
                        <div class="text-danger" style="font-size:8px">
                            {{ $errors->first('kategori')}}
                        </div>
                    @endif

                    <label>Isi</label>
                    <textarea id="summernote" name="isi" class="" cols="30" rows="10" value="{{ $b->isi }}">{{ $b->isi }}</textarea>
                    @if($errors->has('isi'))
                        <div class="text-danger" style="font-size:8px">
                            {{ $errors->first('isi')}}
                        </div>
                    @endif

                    <label>Text</label>
                    <textarea name="teks" id="" class="form-control" cols="30" rows="3" value="{{ $b->teks }}">{{ $b->teks }}</textarea>
                    @if($errors->has('teks'))
                        <div class="text-danger" style="font-size:8px">
                            {{ $errors->first('teks')}}
                        </div>
                    @endif <br>

                    <input type="submit" class="btn btn-success" value="Edit Berita"><br>
                </form>
                @endforeach
              </div>

    </div>
@include('sweetalert::alert')
@endsection
