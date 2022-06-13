@extends('Master')

@section('jumlah_halaman', 'Beranda')


@section('konten')

<div class="logina">
    <div class="avatar">
        <i class="fa fa-user"></i>
    </div>

    <h2>Login</h2>

    <form action="{{ route('login') }}" method="post">
        {{ csrf_field() }}
        <div class="qw">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" placeholder="Masukkan Email Anda">
            @if($errors->has('alamat'))
                <div class="info">
                    {{ $errors->first('email')}}
                </div>
            @endif
        </div>
        <div class="qw">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" id="" placeholder="Password">
            @if($errors->has('alamat'))
                <div class="info">
                    {{ $errors->first('password')}}
                </div>
            @endif
        </div>
        <input type="submit" class="btn-login"value="Login">
        <div class="bottom">
            <p>Jika Belum memiliki akun silahkan <a href="/register">Registrasi</a> </p>
        </div>
    </form>
</div>
@include('sweetalert::alert')
@endsection
