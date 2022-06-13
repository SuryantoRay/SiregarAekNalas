<!-- Menghubungkan dengan view template master -->
@extends('Informasi.Informasi_master')

@section('jumlah_halaman', 'Beranda')


@section('konten')
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('slite/slite3.jpeg') }}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Pemandangan Daerah Siregar</h5>
          <p>Air Yang Jernih dan Bersih Merupakan Daya Tarik Yang Menarik.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('slite/b1.jpg') }}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Lokasi Air Hangat</h5>
          <p>Tempat Dimana Air Hangat itu Datang.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('slite/slite2.jpg') }}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Perlombaan Solu</h5>
          <p>Pengadaan Lomba Solu.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <div class="aaaa">
    <div class="tz-gallery">

        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <div class="caption">
                        <p>
                            <h4>Tepi Pantai Siregar Aek Nalas</h4>
                            Kejernihan Air membuat pengunjung Sangat Bahagia Ketika Berkunjung ketempat ini
                        </p>
                    </div>
                    <a class="lightbox" href="{{ asset('Beranda/b1.jpg') }}">
                        <img class="img2" src="{{ asset('Beranda/b1.jpg') }}" alt="Park">
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <div class="caption">
                        <p>
                            <h4>Tambang Batu Siregar Aek Nalas</h4>
                            Terdapat Tambang Batu Yang Menjadi Mata Pencaharian Masyarakat Sekitar
                        </p>
                    </div>
                    <a class="lightbox" href="{{ asset('Beranda/b2.jpg') }}">
                        <img class="img2" src="{{ asset('Beranda/b2.jpg') }}" alt="Park">
                    </a>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="thumbnail">
                    <div class="caption">
                        <p>
                            <h4>Tampat Rekreasi Siregar Aek Nalas</h4>
                            Tempat Rekreasi ini biasanya Ramai Di Kunjungi jika Hari libur dan juga Hari sabtu sore.
                        </p>
                    </div>
                    <a class="lightbox" href="{{ asset('Beranda/b6.jpg') }}">
                        <img class="img2" src="{{ asset('Beranda/b6.jpg') }}" alt="Park">
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <div class="caption">
                        <p>
                            <h4>Desa Siregar Aek Nalas</h4>
                            DI sekitar desa siregar masih terdapat Rumah Bolon (Rumah Adat Batak)
                        </p>
                    </div>
                    <a class="lightbox" href="{{ asset('Beranda/b3.jpeg') }}">
                        <img class="img2" src="{{ asset('Beranda/b3.jpeg') }}" alt="Park">
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <div class="caption">
                        <p>
                            <h4>Bukit Siregar Aek Nalas</h4>
                            Pegunungan Di sekitan Desa Siregar Juga Pernah Terjadi Longsor Akibat Galian Dari Tabang Batu
                        </p>
                    </div>
                    <a class="lightbox" href="{{ asset('Beranda/b4.jpg') }}">
                        <img class="img2" src="{{ asset('Beranda/b4.jpg') }}" alt="Park">
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <div class="caption">
                        <p>
                            <h4>Siregar Aek Nalas Dari Sipincur</h4>
                            Indahnya Alama Yang Ada di indonesia
                        </p>
                    </div>
                    <a class="lightbox" href="{{ asset('Beranda/b5.jpg') }}">
                        <img class="img2" src="{{ asset('Beranda/b5.jpg') }}" alt="Park">
                    </a>
                </div>
            </div>
        </div>

    </div>

</div>

</div>

@endsection
