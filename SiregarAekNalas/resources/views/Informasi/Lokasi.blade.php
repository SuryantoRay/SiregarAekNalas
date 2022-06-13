<!-- Menghubungkan dengan view template master -->
@extends('Informasi.Informasi_master')

@section('jumlah_halaman', 'Beranda')


@section('konten')
    <div class="map" id="googleMap" style="width:50%;height:380px;"></div>
    <div class="px-lg-5 space">
        <div class="row mx-lg-n5">
          <div class="col py-3 px-lg-5 border bg-light">
              <div>
                <table class="table table-hover">
                    @foreach ($desa as $in)
                        <tr>
                            <td>Negara</td>
                            <td>:</td>
                            <td>{{ $in->negara }}</td>
                        </tr>
                        <tr>
                            <td>Provinsi</td>
                            <td>:</td>
                            <td>{{ $in->provinsi }}</td>
                        </tr>
                        <tr>
                            <td>Kebupaten</td>
                            <td>:</td>
                            <td>{{ $in->kabupaten }}</td>
                        </tr>
                        <tr>
                            <td>Kecamatan</td>
                            <td>:</td>
                            <td>{{ $in->kecamatan }}</td>
                        </tr>
                        <tr>
                            <td>Kode Pos</td>
                            <td>:</td>
                            <td>{{ $in->kodepos }}</td>
                        </tr>
                    @endforeach
                </table>
              </div>
          </div>
          <div class="col py-3 px-lg-5 border bg-light">
            <a class="lightbox" href="{{ asset('Beranda/l1.jpg') }}">
                <img style="width: 100%; height: 300px;" src="{{ asset('Beranda/l1.jpg') }}" alt="Tunnel">
            </a>
          </div>
        </div>
      </div>
@endsection
