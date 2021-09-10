<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=gb18030">
    <!-- habilita el jax para poder enviar los datos -->
    <meta content="{{ csrf_token() }}" name="csrf-token">

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <link rel="shortcut icon" href="{{ asset('imagen_user/logo3.png') }}">
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css" />
    <link rel="stylesheet" href="{{ asset('css/css_user.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cardSlider.css') }}">
    <link rel="stylesheet" href="{{ asset('css/imagehover.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta name="theme-color" content="#fafafa">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Parisienne&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link crossorigin="anonymous" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <title>Ballet Cristiano Talita-Cumi</title>
</head>

<body>





    <nav id="menu" class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: rgba(0,0,0,.5);font-family: 'Montserrat', sans-serif;transition: all 1s ease;">
        <div class="container">
            <a style="font-family: 'Parisienne', cursive;" class="navbar-brand " href="{{ route('index') }}">
                <img class="rounded-circle" src="{{ asset('imagen_user/logo0.jpeg') }}" alt="" width="60" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav" id="menuEffects">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('vista_area') }}"><b>Áreas de
                                Formación</b></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('vista_galeria') }}"><b>Galería</b></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('vista_historia') }}"><b>Historia de la
                                Academia</b></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('vista_MisionyVision') }}"><b>Misión y
                                Visión</b></a>
                    </li>
                    {{-- <li class="nav-item active">
                    <a class="nav-link" href="{{ route('vista_tienda') }}">
                    <i class="fas fa-shopping-cart fa-2x"></i>
                    </a>
                    </li> --}}
                </ul>
            </div>
        </div>
    </nav>

    @yield('header')


    @yield('boton')


    <br>

    @yield('contenido')



    <!-- Footer -->
    <footer style="background-color: black;color: white" class="page-footer font-small blue pt-4">

        <!-- Footer Links -->
        <div class="container-fluid text-md-left" style="font-family: 'Montserrat', sans-serif;">

            <!-- Grid row -->
            <div class="row text-center">

                <!-- Grid column -->
                <div class="col-md-12 mt-md-0 mt-3">

                    <!-- Content -->

                    <h4 class="text-center">Ballet Cristiano Talita-Cumi </h4>
                    <p class="text-center">Academia de Danza Cristiana ubicada en pleno centro de Talca, 4 Sur esquina 3 Oriente #798.</p>

                </div>
                <!-- Grid column -->


                <!-- Grid column -->

            </div>
            <!-- Grid row -->
            <br>
            <div class="row text-center">

                <hr class="clearfix w-100 d-md-none pb-3">

                <!-- Grid column -->
                <div class="col-md-5 mb-md-0 text-justify">

                    <h5><b>Acerca de</b></h5>

                    <ul class="list-unstyled ">
                        <li>
                            <a style="color: white" href="{{ route('vista_historia') }}">Historia</a>
                        </li>
                        <li>
                            <a style="color: white" href="{{ route('vista_MisionyVision') }}">Misión y Visión</a>
                        </li>
                        <li>
                            <a style="color: white" href="{{ route('vista_galeria') }}">Galería
                        </li>
                        <li>
                            <a style="color: white" href="{{ route('vista_area') }}">Área de Formación</a>
                        </li>
                        {{-- <li>
                            <a style="color: white" href="{{ route('vista_tienda') }}">Tienda de Muestra</a>
                        </li> --}}
                    </ul>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-5 mb-md-0 text-justify">

                    <!-- Links -->
                    <h5><b>Contacto:</b></h5>

                    <ul class="list-unstyled">
                        <li>
                            79679910 / +569 97628271
                        </li>
                        <li>
                            talitacumi@gmail.com
                        </li>
                    </ul>

                </div>

                <div class="col-md-2 mb-md-0 ">

                    <!-- Links -->
                    <h5><b>Redes Sociales</b></h5>

                    <a href="https://www.facebook.com/balletcristiano.talitacumi.9">
                        <span style="font-size: 40px; color: white;">
                            <i class="fab fa-facebook"></i>
                        </span>

                    </a>
                    <a href="https://www.instagram.com/ballettalitacumi/?hl=es-la">
                        <span style="font-size: 40px; color: white; margin-left: 40px;">
                            <i class="fab fa-instagram"></i>
                        </span>
                    </a>

                </div>

            </div>

        </div>
        <div style="height: 30px;"></div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div style="font-family: 'Montserrat', sans-serif;" class="footer-copyright text-center py-3"> Copyright© 2020
            <a style="color: white" target="_blank">Ballet Cristiano Talita Cumi. Todos los derechos Reservados </a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->

    <a id="scrollUp" class="scroll-to-top rounded js-scroll-trigger">
    </a>


    <script src="js/js_user/vendor/modernizr-3.7.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="js/js_user/plugins.js"></script>
    <script src="js/js_user/main.js"></script>


    <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
    <script>
        window.ga = function() {
            ga.q.push(arguments)
        };
        ga.q = [];
        ga.l = +new Date;
        ga('create', 'UA-XXXXX-Y', 'auto');
        ga('set', 'transport', 'beacon');
        ga('send', 'pageview')
    </script>
    <script src="https://www.google-analytics.com/analytics.js" async></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="{{asset('js/js_user/wow.min.js')}}"></script>
    <script src="{{asset('js/js_user/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('js/js_user/owl.carousel.min.js')}}"></script>
    <script>
        $(window).scroll(function() {
            if ($("#menu").offset().top > 120) {
                $("#menu").addClass("bg-negro");
                $("#menu").addClass("texto-negro");
            } else {
                $("#menu").removeClass("bg-negro");
                $("#menu").removeClass("texto-negro");
            }
        });
    </script>
    <script>
        $(function() {
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

    <script>
        $(document).ready(function() {
            $(".owl-carousel").owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 5
                    }
                }
            });
        });
    </script>

    <!-- GetButton.io widget -->
    <script type="text/javascript">
        (function() {
            var options = {
                whatsapp: "+56997628271", // WhatsApp number
                call_to_action: "Contáctanos", // Call to action
                position: "left", // Position may be 'right' or 'left'
            };
            var proto = document.location.protocol,
                host = "getbutton.io",
                url = proto + "//static." + host;
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = url + '/widget-send-button/js/init.js';
            s.onload = function() {
                WhWidgetSendButton.init(host, proto, options);
            };
            var x = document.getElementsByTagName('script')[0];
            x.parentNode.insertBefore(s, x);
        })();
    </script>
    <!-- /GetButton.io widget -->

</body>

</html>