<!doctype html>
<html lang="en">
<head>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css"/>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css"/>
    <link rel="stylesheet" href="{{ asset('css/css_user.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cardSlider.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta name="theme-color" content="#fafafa">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Parisienne&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link crossorigin="anonymous" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
          integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
          integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <title>Talita Cumi</title>
</head>
<body>


@yield('header')


<nav id="menu" class="navbar navbar-expand-lg navbar-light fixed-top py-0"
     style="background-color: transparent;font-family: 'Montserrat', sans-serif;background-color: transparent; transition: all 1s ease;">
    <a style="font-family: 'Parisienne', cursive;" class="navbar-brand " href="{{ route('index') }}"><img
                src="{{ asset('imagen_user/logo.png') }}" alt=""
                width="100">
        <b style="font-size: 30px">Talita-Cumi</b></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a style="" class="nav-link" href="{{ route('index') }}"><b>Areas de Formacion</b></a>
            </li>
            <li class="nav-item active">
                <a style="" class="nav-link" href="{{ route('vista_galeria') }}"><b>Galeria</b></a>
            </li>
            <li class="nav-item active">
                <a style="" class="nav-link" href="{{ route('vista_historia') }}"><b>Historia de la Academia</b></a>
            </li>
            <li class="nav-item active">
                <a style="" class="nav-link" href="{{ route('vista_MisionyVision') }}"><b>Mision y Vision</b></a>
            </li>
        </ul>
    </div>
</nav>

@yield('boton')


<br>

@yield('contenido')

<section>
    @yield('tienda')
</section>

@yield('misionvision')

@yield('galeria')

@yield('historia')

<!-- Footer -->
<footer style="background-color: black;color: white" class="page-footer font-small blue pt-4">

    <!-- Footer Links -->
    <div class="container-fluid text-md-left" style="font-family: 'Montserrat', sans-serif;">

        <!-- Grid row -->
        <div class="row text-center">

            <!-- Grid column -->
            <div class="col-md-12 mt-md-0 mt-3">

                <!-- Content -->
                <h2 class="text-center">BALLET CRISTIANO TALITA CUMI</h2>
                <p class="text-center">Here you can use rows and columns to organize your footer content.</p>

            </div>
            <!-- Grid column -->


            <!-- Grid column -->

        </div>
        <!-- Grid row -->

        <div class="row text-center">

            <hr class="clearfix w-100 d-md-none pb-3">

            <!-- Grid column -->
            <div class="col-md-5 mb-md-0 mb-3 text-justify">

                <h5 class="text-uppercase"><b>ACERCA DE</b></h5>

                <ul class="list-unstyled ">
                    <li>
                        <a style="color: white" href="{{ route('vista_historia') }}">HISTORIA</a>
                    </li>
                    <li>
                        <a style="color: white" href="{{ route('vista_MisionyVision') }}">MISION Y VISION</a>
                    </li>
                    <li>
                        <a style="color: white" href="{{ route('vista_galeria') }}">GALERIA</a>
                    </li>
                    <li>
                        <a style="color: white" href="#!">AREA DE FORMACION</a>
                    </li>
                </ul>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-5 mb-md-0 mb-3 text-justify">

                <!-- Links -->
                <h5 class="text-uppercase"><b>CONTACTANOS</b></h5>

                <ul class="list-unstyled">
                    <li>
                        +56994123432
                    </li>
                    <li>
                        correo@dominio.com
                    </li>
                </ul>

            </div>

            <div class="col-md-2 mb-md-0 mb-3 ">

                <!-- Links -->
                <h5 class="text-uppercase"><b>REDES SOCIALES</b></h5>

                <a href="#"><img src="{{ asset('imagen_user/facebooklogo.png') }}" alt="" width="50"></a>
                <a href="#"><img src="{{ asset('imagen_user/instagramlogo.png') }}" alt="" width="50 "></a>

            </div>

        </div>

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div style="font-family: 'Montserrat', sans-serif;" class="footer-copyright text-center py-3">© 2019 Copyright:
        <a style="color: white" href="https://www.caceresdesign.com" target="_blank">www.caceresdesign.com</a>
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->

<a id="scrollUp" class="scroll-to-top rounded js-scroll-trigger">
</a>


<script src="js/js_user/vendor/modernizr-3.7.1.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="js/js_user/plugins.js"></script>
<script src="js/js_user/main.js"></script>


<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script>
    window.ga = function () {
        ga.q.push(arguments)
    };
    ga.q = [];
    ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto');
    ga('set', 'transport', 'beacon');
    ga('send', 'pageview')
</script>
<script src="https://www.google-analytics.com/analytics.js" async></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="{{asset('js/js_user/wow.min.js')}}"></script>
<script src="{{asset('js/js_user/jquery.scrollUp.min.js')}}"></script>
<script>
    $(window).scroll(function () {
        if ($("#menu").offset().top > 360) {
            $("#menu").addClass("bg-negro");
        } else {
            $("#menu").removeClass("bg-negro");
        }
    });
</script>
<script>
    $(function () {
        $.scrollUp({
            scrollName: 'scrollUp', // Element ID
            topDistance: '300', // Distance from top before showing element (px)
            topSpeed: 300, // Speed back to top (ms)
            animation: 'fade', // Fade, slide, none
            animationInSpeed: 200, // Animation in speed (ms)
            animationOutSpeed: 200, // Animation out speed (ms)
            scrollImg: true,
            activeOverlay: true, // Set CSS color to display scrollUp active point, e.g '#00FFFF'

        });
    });
</script>

<script>
    new WOW().init();
</script>
</body>
</html>