@extends('Admin.Beranda')


@section('konten')
    <div class="containeri">
        <i class="fas fa-th fasi"></i> <span style="font-size: 50px; margin-left: 15px; font-family: Footlight MT;"> Tambah Berita</span>
        <hr>
    </div>
    <div class="containeri">
        <a href="/Info/{{ Auth::user()->id }}" class="btn btn-primary">+ Berita</a>
    </div>
    <div class="containeri">
        <div class="container">
            <h1>Semua Berita</h1>
                <table class="table1">
                    <tr>
                        <th>Gambar</th>
                        <th>Judul</th>
                        <th>Kategori</th>
                        <th>Hapus</th>
                        <th>Edit</th>
                    </tr>
                    @foreach($Berita as $b)
                        <tr>
                            <td><img src="{{ asset('Admin/Berita/'.$b->gambar) }}" class="hhhh" alt=""></td>
                            <td>{{ $b->judul }}</td>
                            <td>{{ $b->kategori }}</td>
                            <td>
                                <a href="/hapusberita/{{ $b->id }}" class="btn btn-danger"  onclick="return confirm('Apakah Anda Yakin untuk Menghapus Berita ini ?')"><i class="fas fa-trash-alt"></i> Hapus</a>
                            </td>
                            <td>
                                <a href="/eeee/{{ $b->id }}" class="btn btn-success"><i class="fas fa-edit"></i> Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
    </div>


@include('sweetalert::alert');
@endsection
