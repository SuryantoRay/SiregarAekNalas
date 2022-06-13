@extends('Admin.Beranda')


@section('konten')
    <div class="containeri">
        <i class="far fa-address-book fasi"></i> <span style="font-size: 50px; margin-left: 15px; font-family: Footlight MT;"> Info Umum</span>
        <hr>
    </div>
    <div class="">
        <div class="">
            @foreach ($Desa as $d)
            <form action="/editUM/{{ $d->id }}" method="post">
                {{ csrf_field() }}
                    <label>Negara</label>
                    <input type="text" name="negara" class="form_login" value="{{ $d->negara }}">

                    <label>Provinsi</label>
                    <input type="text" name="provinsi" class="form_login" value="{{ $d->provinsi }}">

                    <label>Kabupaten</label>
                    <input type="text" name="kabupaten" class="form_login" value="{{ $d->kabupaten }}">

                    <label>Kecamatan</label>
                    <input type="text" name="kecamatan" class="form_login" value="{{ $d->kecamatan }}">

                    <label>Kode Pos</label>
                    <input type="text" name="kodepos" class="form_login" value="{{ $d->kodepos }}">

                    <button type="submit" class="asil"><i class="fa fa-edit"></i> Edit</button>
            </form>
            @endforeach
        </div>
    </div>
@include('sweetalert::alert')
@endsection
