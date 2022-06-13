@extends('Admin.Beranda')


@section('konten')
    <div class="containeri">
        <i class="fas fa-th fasi"></i> <span style="font-size: 50px; margin-left: 15px; font-family: Footlight MT;"> Tambah Berita</span>
        <hr>
    </div>
    <div class="containeri">
        <div class="container">
            <div class="row">
              <div class="col">
                  <a href="/BeritaK/{{ Auth::user()->id }}"><div class="bb1">
                    <table>
                        <tr>
                            <td rowspan="2"><i class="far fa-clipboard" style="font-size: 100px"></i></td>
                            <td>Tambah</td>
                        </tr>
                        <tr>
                            <td>Kategori</td>
                        </tr>
                    </table>
                  </div></a>
              </div>
              <div class="col">
                <a href="/Info/{{ Auth::user()->id }}"><div class="bb2">
                    <table>
                        <tr>
                            <td rowspan="2"><i class="	fas fa-copy" style="font-size: 100px"></i></td>
                            <td>Tambah</td>
                        </tr>
                        <tr>
                            <td>Berita</td>
                        </tr>
                    </table>
                  </div></a>
              </div>
        </div>
    </div>
@include('sweetalert::alert')
@endsection
