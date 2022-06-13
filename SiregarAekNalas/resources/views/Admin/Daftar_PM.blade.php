@extends('Admin.Beranda')


@section('konten')
    <div class="containeri">
        <i class="fas fa-user-alt fasi"></i> <span style="font-size: 50px; margin-left: 15px; font-family: Footlight MT;"> Daftar Pembeli</span>
        <hr>
    </div>
    <div class="containeri">
        <table class="table1">
            <tr>
                <th>Gambar</th>
                <th>Nama</th>
                <th>Tanggal Lahir</th>
                <th>No Handphone</th>
                <th>Whatsapp</th>
                <th>Opsi</th>
            </tr>
            @foreach($Pembeli as $p)
                <tr>
                    <td>
                        @if ($p->file == "-" || $p->file == "")
                            <img src="{{ asset('Beranda/user.png') }}"  class="hhhh">
                        @else
                            <img src="{{ asset('Pembeli/user/'.$p->file) }}"  class="hhhh" alt="">
                        @endif
                    </td>
                    <td>{{ $p->nama }}</td>
                    <td>{{ $p->tanggal_lahir }}</td>
                    <td>{{ $p->no_handphone }}</td>
                    <td>{{ $p->whatsapps }}</td>
                    <td><a href="/blokirPM/{{ $p->user_id }}" onclick="return confirm('Apakah Anda Yakin untuk Menghapus Akun INi ?')" class="blokir">Blokir</a></td>
                </tr>
            @endforeach
        </table>
    </div>
    <div class="container">
        <div class="row">
          <div class="col-sm">

          </div>
          <div class="col-sm">
            {{ $Pembeli->links() }}
          </div>
          <div class="col-sm">

          </div>
        </div>
      </div>
@include('sweetalert::alert')
@endsection
