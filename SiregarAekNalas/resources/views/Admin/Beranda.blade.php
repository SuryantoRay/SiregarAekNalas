<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siregar Aek Nalas</title>
    <link rel="stylesheet" href="{{ asset('css_2/admin.css') }}">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

  </head>
  <body>

    <input type="checkbox" id="check">
    <!--header area start-->
    <header>
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
        <h3>Hallo <span>Admin</span></h3>
      </div>
      <div class="right_area">
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button type="submit" class="logout_btn" onclick="return confirm('Apakah Anda Yakin untuk Keluar Dari Halaman Ini ?')" >Logout</button>
        </form>
      </div>
    </header>
    <!--header area end-->
    <!--mobile navigation bar start-->
    <div class="mobile_nav">
      <div class="nav_bar">
        <img src="{{ asset('Admin/admin.png') }}" class="mobile_profile_image" alt="">
        <i class="fa fa-bars nav_btn"></i>
      </div>
      <div class="mobile_nav_items">
        <a href="/homee/{{ Auth::user()->id }}"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
        <a href="/daftarPE/{{ Auth::user()->id }}"><i class="fas fa-user-tie"></i><span>Daftar Pengusaha</span></a>
        <a href="/daftarPM/{{ Auth::user()->id }}"><i class="fas fa-user-alt"></i><span>Daftar Pembeli</span></a>
        <a href="/BeritaA/{{ Auth::user()->id }}"><i class="fas fa-th"></i><span>Tambah Berita</span></a>
        <a href="/umum/{{ Auth::user()->id }}"><i class="far fa-address-book"></i><span>Info Umum</span></a>
        <a href="/gambarM/{{ Auth::user()->id }}"><i class="fas fa-camera-retro"></i><span> Masukkan Gambar</span></a>
      </div>
    </div>
    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <div class="sidebar">
      <div class="profile_info">
        <img src="{{ asset('Admin/admin.png') }}" width="100" height="100"alt="">
        <h4>{{ auth()->user()->name }}</h4>
      </div>
      <a href="/homee/{{ Auth::user()->id }}"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
      <a href="/daftarPE/{{ Auth::user()->id }}"><i class="fas fa-user-tie"></i><span>Daftar Pengusaha</span></a>
      <a href="/daftarPM/{{ Auth::user()->id }}"><i class="fas fa-user-alt"></i><span>Daftar Pembeli</span></a>
      <a href="/BeritaA/{{ Auth::user()->id }}"><i class="fas fa-th"></i><span>Tambah Berita</span></a>
      <a href="/umum/{{ Auth::user()->id }}"><i class="far fa-address-book"></i><span>Info Umum</span></a>
      <a href="/gambarM/{{ Auth::user()->id }}"><i class="fas fa-camera-retro"></i><span> Masukkan Gambar</span></a>
    </div>
    <!--sidebar end-->

    <div class="content">
        @yield('konten')
    </div>

    <script type="text/javascript">
    $(document).ready(function(){
      $('.nav_btn').click(function(){
        $('.mobile_nav_items').toggleClass('active');
      });
    });
    </script>
<script>
    $('#summernote').summernote({
      placeholder: 'Masukkan Teks',
      tabsize: 2,
      height: 100
    });
  </script>



<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

  </body>
</html>
