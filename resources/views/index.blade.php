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
    <link rel="stylesheet" href="{{ asset('css/css_user.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta name="theme-color" content="#fafafa">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Parisienne&display=swap" rel="stylesheet">
    <title>Talita Cumi</title>
</head>
<body>


<div class="page-header header-filter clear-filter menu">

    <nav class="navbar navbar-expand-lg navbar-light "
         style="background-color: transparent;font-family: 'Montserrat', sans-serif;">
        <a style="color: white; " class="navbar-brand" href="#"><img src="{{ asset('imagen_user/logo.png') }}" alt=""
                                                                     width="100">
            <b> TALITA CUMI
            </b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a style="color: white" class="nav-link" href="#"><b>Areas de Formacion</b></a>
                </li>
                <li class="nav-item active">
                    <a style="color: white" class="nav-link" href="#"><b>Galeria</b></a>
                </li>
                <li class="nav-item active">
                    <a style="color: white" class="nav-link" href="#"><b>Historia de la Academia</b></a>
                </li>
                <li class="nav-item active">
                    <a style="color: white" class="nav-link" href="#"><b>Mision y Vision</b></a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="col-md-6 offset-md-3 text-right" style="position: absolute; color: white;margin-top: 30vh">
        <h1 style="font-family: 'Parisienne', cursive;font-weight: 700 ;font-size: 6.5vw" class="text-center">Ballet
            Cristiano Talita-Cumi</h1><br><br>
        <button style="background-color:black;color: white ; font-size: 1.5vw" type="button"  class="btn btn-lg float-right">CALENDARIO DE
            EVENTOS →
        </button>
    </div>


</div>
<br>

<h1 style="font-family: 'Montserrat', sans-serif; text-align: center ">ASPECTOS DESTACADOS</h1>
<br>


<!--modificacion Diego -->
<div class="row">
    <div class="col-md-11 mx-auto">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner tam">


                <div class="carousel-item active">
                    <img src="/imagen_user/2019.jpg" class="d-block w-100" alt="...">
                </div>

                @foreach($publicaciones as $p)
                    @if($p->categoria == 2)
                        @if($p->estado == 'activo')
                            <div class="carousel-item ">

                                @if($p->tipo == 1)
                                    <img alt="First slide" class="d-block w-100"
                                         src="{{ Storage::url($p->URLpublicacion) }}" alt="">
                                @endif

                                @if($p->tipo == 2)
                                    <video alt="First slide" class="d-block w-100" controls width=600>
                                        <source src="{{ Storage::url($p->URLpublicacion) }}" type="video/mp4">
                                    </video>
                                @endif
                            </div>
                        @endif
                    @endif
                @endforeach


            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!--fin modificacion Diego -->

</div>
<br>


<h1 style="font-family: 'Montserrat', sans-serif; text-align: center">PROXIMOS EVENTOS</h1>

<br>

<div class="container">
    <div class="row">

        <div class="col-md-4">
            <div class="card mb-4 box-shadow">
                <img class="card-img-top" alt="" src="{{ asset('imagen_user/fondoInicio.jpg') }}"
                     data-holder-rendered="true"
                     style="height: 225px; width: 100%; display: block;">
                <div class="card-body" style="font-family: 'Montserrat', sans-serif;">
                    <h4 class="text-center">This is a wider card</h4>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional
                        content. This content is a little bit longer.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <small class="text-muted">18 de Agosto</small>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4 box-shadow">
                <img class="card-img-top" alt="" src="{{ asset('imagen_user/fondoInicio.jpg') }}"
                     data-holder-rendered="true"
                     style="height: 225px; width: 100%; display: block;">
                <div class="card-body" style="font-family: 'Montserrat', sans-serif;">
                    <h4 class="text-center">This is a wider card</h4>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional
                        content. This content is a little bit longer.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <small class="text-muted">18 de Agosto</small>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4 box-shadow">
                <img class="card-img-top" alt="" src="{{ asset('imagen_user/fondoInicio.jpg') }}"
                     data-holder-rendered="true"
                     style="height: 225px; width: 100%; display: block;">
                <div class="card-body" style="font-family: 'Montserrat', sans-serif;">
                    <h4 class="text-center">This is a wider card</h4>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional
                        content. This content is a little bit longer.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <small class="text-muted">18 de Agosto</small>
                    </div>
                </div>
            </div>
            <button style="background-color:black;color: white" type="button" class="btn btn-lg float-right">VER MÁS
                →
            </button>
        </div>
        <br>
    </div>
</div>
<br>

<h1 style="font-family: 'Montserrat', sans-serif; text-align: center">SIGUENOS EN NUESTRAS REDES SOCIALES</h1>

<br>

<div class="text-center">
    <a href="#"><img src="{{ asset('imagen_user/facebooklogo.png') }}" alt="" width="100"></a>
    <a href="#"><img src="{{ asset('imagen_user/instagramlogo.jpg') }}" alt="" width="100"></a>
</div>

<br>

<div class="container">
    <div class="card" id="galeriaImagenes"><br>
        <h1 style="font-family: 'Montserrat', sans-serif; text-align: center" class="text-center">Galeria de
            Imagenes</h1>
        <div class="card-body ">
            <div class="row">
                <div class="col-sm-4 mb-1">
                    <a id="" data-fancybox="gallery" href="{{ asset('imagen_user/dance.jpg') }}"><img
                                src="{{ asset('imagen_user/dance.jpg') }}"></a>
                </div>
                <div class="col-sm-4 mb-1">
                    <a data-fancybox="gallery" href="{{ asset('imagen_user/fondoInicio.jpg') }}"><img
                                src="{{ asset('imagen_user/fondoInicio.jpg') }}"></a>
                </div>

                <div class="col-sm-4 mb-1">
                    <a data-fancybox="gallery" href="{{ asset('imagen_user/fondoInicio.jpg') }}"><img
                                src="{{ asset('imagen_user/fondoInicio.jpg') }}"></a>
                </div>

            </div>
        </div>
    </div>
</div>

<br>

<h1 style="font-family: 'Montserrat', sans-serif; text-align: center">UBICANOS</h1>

<br>

<div id="map" class="container map" style="height: 300PX">
</div>

<br>

<h1 style="font-family: 'Montserrat', sans-serif; text-align: center">EQUIPO DE TRABAJO</h1>

<br>

<div class="container">
    <div class="row">

        <div class="col-md-4">
            <div class="card mb-4 box-shadow">
                <img class="card-img-top" alt="" src="{{ asset('imagen_user/fondoInicio.jpg') }}"
                     data-holder-rendered="true"
                     style="height: 225px; width: 100%; display: block;">
                <div class="card-body" style="font-family: 'Montserrat', sans-serif;">
                    <h4 class="text-center">This is a wider card</h4>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional
                        content. This content is a little bit longer.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <small class="text-muted">18 de Agosto</small>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4 box-shadow">
                <img class="card-img-top" alt="" src="{{ asset('imagen_user/fondoInicio.jpg') }}"
                     data-holder-rendered="true"
                     style="height: 225px; width: 100%; display: block;">
                <div class="card-body" style="font-family: 'Montserrat', sans-serif;">
                    <h4 class="text-center">This is a wider card</h4>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional
                        content. This content is a little bit longer.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <small class="text-muted">18 de Agosto</small>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4 box-shadow">
                <img class="card-img-top" alt="" src="{{ asset('imagen_user/fondoInicio.jpg') }}"
                     data-holder-rendered="true"
                     style="height: 225px; width: 100%; display: block;">
                <div class="card-body" style="font-family: 'Montserrat', sans-serif;">
                    <h4 class="text-center">This is a wider card</h4>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional
                        content. This content is a little bit longer.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <small class="text-muted">18 de Agosto</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>

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

                <h5 class="text-uppercase">ACERCA DE</h5>

                <ul class="list-unstyled ">
                    <li>
                        <a href="#!">HISTORIA</a>
                    </li>
                    <li>
                        <a href="#!">MISION Y VISION</a>
                    </li>
                    <li>
                        <a href="#!">GALERIA</a>
                    </li>
                    <li>
                        <a href="#!">AREA DE FORMACION</a>
                    </li>
                </ul>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-5 mb-md-0 mb-3 text-justify">

                <!-- Links -->
                <h5 class="text-uppercase">CONTACTANOS</h5>

                <ul class="list-unstyled">
                    <li>
                        <a href="#!">+56994123432</a>
                    </li>
                    <li>
                        <a href="#!">correo@dominio.com</a>
                    </li>
                </ul>

            </div>

            <div class="col-md-2 mb-md-0 mb-3 ">

                <!-- Links -->
                <h5 class="text-uppercase">REDES SOCIALES</h5>

                <a href="#"><img src="{{ asset('imagen_user/facebooklogo.png') }}" alt="" width="50"></a>
                <a href="#"><img src="{{ asset('imagen_user/instagramlogo.png') }}" alt="" width="50 "></a>

            </div>

        </div>

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2018 Copyright:
        <a href="#"> caceresdesign.com</a>
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->


<script src="js/js_user/vendor/modernizr-3.7.1.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-3.4.1.min.js"><\/script>')</script>
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

</body>
</html>