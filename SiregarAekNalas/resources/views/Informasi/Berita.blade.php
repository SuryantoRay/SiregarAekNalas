@extends('Informasi.Informasi_master')

@section('jumlah_halaman', 'Beranda')

@section('konten')
<div class="container gallery-container">
    <center><img src="{{ asset('Beranda/berita.jpeg') }}" class="foto" alt=""></center>

            <div class="container">
            <div class="row row-cols-3">
                @foreach($Berita as $b)
              <div class="col">
                <div class="post">
                    <a class="post-img" href="/bacabaca/{{ $b->id }}"><img src="{{ asset('Admin/Berita/'.$b->gambar) }}" alt=""></a>
                    <div class="post-body">
                        <div class="post-meta">
                            <a class="post-category cat-1" href="/bacabaca/{{ $b->id }}">{{ $b->kategori }}</a>
                            <span class="post-date">{{ $b->created_at }} </span>
                        </div>
                        <a href="/bacabaca/{{ $b->id }}" style="color: black;"><h3 class="post-title"><p>{{ $b->judul }}</p></h3></a>
                    </div>
                </div>
                {{-- {{ substr(strip_tags($b->isi),0, 200) }} --}}
              </div>
              @endforeach
            </div>
          </div>
</div>


@endsection
