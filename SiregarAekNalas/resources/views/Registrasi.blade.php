@extends('Master')

@section('jumlah_halaman', 'Beranda')


@section('konten')

<div class="loginaa">
    <div class="avatar">
        <i class="fa fa-user"></i>
    </div>

    <h2>Registrasi</h2>

    <form action="/register/proses" method="post">
        {{ csrf_field() }}
        <div class="qw">
            <i class="fas fa-users"></i>
            <input type="text" placeholder="Nama Lengkap" name="name" value="{{ old('name') }}">
            @if($errors->has('name'))
                <div class="info">
                    {{ $errors->first('name')}}
                </div>
            @endif
        </div>
        <div class="qw">
            <i class="fas fa-envelope"></i>
            <input type="email" placeholder="Email Anda" name="email" value="{{ old('email') }}">
            @if($errors->has('email'))
                <div class="info">
                    {{ $errors->first('email')}}
                </div>
            @endif
        </div>
        <div class="qw">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="password" value="{{ old('password') }}">
            @if($errors->has('password'))
                <div class="info">
                    {{ $errors->first('password')}}
                </div>
            @endif
        </div>
        <div class="qw">
            <i class="fa fa-venus-mars"></i>
            <select name="jenis_kelamin" id="" selected="{{ old('jenis_kelamin')}}">
                <option value="">-- Pilih --</option>
                <option value="L">Laki-Laki</option>
                <option value="P">Perempuan</option>
            </select>
            @if($errors->has('jenis_kelamin'))
                <div class="info">
                    {{ $errors->first('jenis_kelamin')}}
                </div>
            @endif
        </div>
        <div class="qw">
            <i class="fas fa-map-marker-alt"></i>
            <input type="text" name="alamat" placeholder="Alamat" value="{{ old('alamat') }}">
            @if($errors->has('alamat'))
                <div class="info">
                    {{ $errors->first('alamat')}}
                </div>
            @endif
        </div>
        <div class="qw">
            <i class="fa fa-address-card"></i>
            <select name="posisi" id="" selected="{{ old('posisi')}}">
                <option value="">-- Pilih --</option>
                <option value="Pengusaha">Pengusaha</option>
                <option value="Pembeli">Pembeli</option>
            </select>
            @if($errors->has('alamat'))
                <div class="info">
                    {{ $errors->first('posisi')}}
                </div>
            @endif
        </div>
        <button type="submit" class="btn-login">Registrasi</button>
        <div class="bottom">
            <p>Kembali ke halaman <a href="/login">Login</a> </p>
        </div>
    </form>
</div>
@endsection
