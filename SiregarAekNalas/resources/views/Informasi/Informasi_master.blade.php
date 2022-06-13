<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css_2/informasi.css') }}">
    <link rel="stylesheet" href="{{ asset('css_2/slite.css') }}">
    <link rel="stylesheet" href="{{ asset('css_2/style.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
    <script src="http://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v9.0" nonce="Rr6IEI8P"></script>
    <script>
        $(document).ready(function() {
            $('#icon').click(function() {
                $('ul').toggleClass('show');
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            $('.thumbnail').hover(
                function () {
                    $(this).find('.caption').slideDown(300);
                },
                function () {
                    $(this).find('.caption').slideUp(300);
                }
            );
        });

    </script>
    <title>Siregar Aek Nalas</title>
</head>
<body>
    <nav class="navbar navbar-fixed-top">
        <label class="logo"><img class="img" src="{{ asset('logo.png') }}" alt=""></label>
        <ul>
            <li><a href="/">Beranda</a></li>
            <li><a href="/ber">Berita</a></li>
            <li><a href="/lokasi">Lokasi</a></li>
            <li><a href="/foto">Foto</a></li>
            <li><a href="/saran">Saran</a></li>
            <li>
                
                    <input type="text" name="" class="form-control" placeholder="Cari ....">

            </li>
            <li><a href="/register">Sign Up</a></li> |
            <li><a href="/login">Login</a></li>
        </ul>
        <label id="icon">
            <i class="fa fa-bars"></i>
        </label>
    </nav>

    <!-- bagian konten blog -->
    @yield('konten')

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
                    <h5>Follow As</h5>
                    <a href=""><span class="fab fa-facebook-f"></span></a>
                    <a href=""><span class="fab fa-twitter"></span></a>
                    <a href=""><span class="fab fa-youtube"></span></a>
                    <a href=""><span class="fab fa-instagram"></span></a>
                </div>
            </div>
        </div></center>
    </footer>


    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
    <script>
        baguetteBox.run('.tz-gallery');
    </script>

    {{-- Map --}}
    <script type="text/javascript">
        function initialize() {
            var propertiPeta={
                center:new google.maps.LatLng(1.1768319, 105.6403561),
                zoom:5
            }
            var peta = new google.maps.Map(document.getElementById("googleMap"),propertiPeta);
            // Membuat marker
            var marker = new google.maps.Marker({
                position:new google.maps.LatLng(2.4068833, 99.0435135),
                map:peta,
                animation: google.maps.Animation.BOUNCE
            })
        }
        initialize();
    </script>
</body>
</html>
