<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css_2/pembeli.css') }}">
     <!-- Scripts -->
     <script src="{{ asset('js/app.js') }}" defer></script>

     <!-- Fonts -->
     <link rel="dns-prefetch" href="//fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

     <!-- Styles -->
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="http://code.jquery.com/jquery-3.5.1.js"></script>
    <title>Siregar Aek Nalas</title>
</head>
<body class="body">

    <nav class="navbar navbar-expand-lg navbar-light pm">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <label class="logo"><img class="img" src="{{ asset('logo.png') }}" width="80" height="80" ></label>
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0 bacv2">
            <li class="nav-item active">
              <a class="navi" href="/home/{{ Auth::user()->id }}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="navi" style="" href="/pesanan/{{ Auth::user()->id }}">Pesanan</a>
            </li>
              <li class="nav-item">
                <a class="navi" href="/dataPribadi/{{ Auth::user()->id }}">Data Pribadi</a>
              </li>
              <form class="">
                <input class="form-control f" type="search" placeholder="Search" aria-label="Search">
              </form>
          </ul>
                @if (Auth::user()->pembeli->file == "-" || Auth::user()->pembeli->file == "")
                    <img class="luser" src="{{ asset('Beranda/user.png') }}">
                @else
                    <img class="luser" src="{{ asset('Pembeli/user/'.Auth::user()->pembeli->file) }}" alt="">
                @endif |
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit" onclick="return confirm('Apakah Anda Yakin untuk Keluar Dari Halaman Ini ?')" style="font-size:40px; border: none; background: none; color: white; margin-right: 10px;"><i class='fas fa-sign-out-alt'></i></button>
                </form>

        </div>
      </nav>
    <div class="containeri">
        <!-- bagian konten blog -->
        @yield('konten')
    </div>
    <footer>
        <div class="acontent">
            <div class="left box">
                <h2>Contact Us</h2>
                <div class="content">
                    <div class="place social">
                        <a href=""><span class="fas fa-phone-alt"></i></span></a>
                        <span class="text">+0822-72741515</span>
                    </div>
                    <div class="place social">
                        <a href=""><span class="fas fa-envelope"></i></span></a>
                        <span class="text">suryanto44@gmail.com</span>
                    </div>
                    <div class="place social">
                        <a href=""><span class="fab fa-whatsapp"></i></span></a>
                        <span class="text">+0822-72741515</span>
                    </div>
                </div>
            </div>
            <div class="center box">
                <div class="content">
                </div>
            </div>
            <div class="left box">
                <h2>Follow As</h2>
                <div class="content">
                    <div class="place social">
                        <a href=""><span class="fab fa-instagram"></i></span></a>
                        <span class="text">@suryantoray_p</span>
                    </div>
                    <div class="place social">
                        <a href=""><span class="fab fa-facebook-f"></i></span></a>
                        <span class="text">suryanto44@gmail.com</span>
                    </div>
                </div>
            </div>
        </div><center>
        <div class="left box">
            <div class="content">
                <div class="social ss">
                    ©2020 by Kelompok 09 Teknologi Rekayasa Perangkat Lunak ITD
                </div>
            </div>
        </div></center>
    </footer>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
</body>
</html>
