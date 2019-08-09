@extends('index')


@section('header')
    <div class="page-header header-filter clear-filter menu">
        @endsection
        @section('boton')
            <div class="col-md-6 offset-md-3 text-right" style="position: absolute; color: white;margin-top: 30vh">
                <h1 style="font-family: 'Parisienne', cursive;font-weight: 700 ;font-size: 6.5vw" class="text-center">
                    Ballet
                    Cristiano Talita-Cumi

            </div>
    </div>
@endsection






@section('contenido')

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


    </div>
    <!--fin modificacion Diego -->
    <br>

    <h1 style="font-family: 'Montserrat', sans-serif; text-align: center">PROXIMOS EVENTOS</h1>

    <br>




<div class="container">

        <div class="page-wrapper">
            <div class="post-slider">
                <div class="text-right mb-4">
                    <a class="btn btn-outline-secondary prev" href="" title="go back"><i class="fa fa-lg fa-chevron-left"></i></a>
                    <a class="btn btn-outline-secondary next" href="" title="more"><i class="fa fa-lg fa-chevron-right"></i></a>
                </div>
                <div class="post-wrapper">
                    @foreach($eventos as $e)
                        @if($e->estado == 'activo')
                            <div class="post">

                                <div class="card mb-4 box-shadow">
                                    <img class="card-img-top" alt="" src="{{ Storage::url($e->URLfoto) }}"
                                         data-holder-rendered="true"
                                         style="height: 225px; width: 100%; display: block;">
                                    <div class="card-body" style="font-family: 'Montserrat', sans-serif;">
                                        <h4 class="text-center">{{$e->tituloEvento}}</h4>

                                        <p class="card-text text-center" style="">Lorem ipsum dolor sit aicing elit. Cupiditate,laboriosam molestias natus nemo odio. Alias dicta e
                                            ligendi et fugit ma, omnis, quaerat.</p>

                                        <div class="d-flex justify-content-between align-items-center">
                                            <small class="text-muted">{{$e->fechaInicio}}</small>
                                            <small class="text-muted">{{$e->fechaFin}}</small>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        @endif
                    @endforeach
                </div>

            </div>

        </div>

    <br>
    <!--boton remplazado por a -->
    <l style="background-color:black"
       class="btn btn-lg">
        <a style="color: white;" href="{{ route('vista_eventos') }}">
            <span> VER MÁS →</span></a></l>
</div>



















    <br><br><br>
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
                    @foreach($publicaciones as $p)
                        @if($p->categoria == 1)
                            @if($p->estado == 'activo')
                                @if($p->tipo == 1)

                                    <div class="col-sm-4 mb-1">
                                        <a data-fancybox="gallery" href="{{ Storage::url($p->URLpublicacion) }}">
                                            <img src="{{ Storage::url($p->URLpublicacion) }}"></a>
                                    </div>
                                @endif

                                @if($p->tipo == 2)
                                    <div class="col-sm-4 mb-1">
                                        <a data-fancybox="gallery" href="{{ Storage::url($p->URLpublicacion) }}">
                                            <img src=""></a>
                                    </div>

                                @endif
                            @endif
                        @endif
                    @endforeach


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





@endsection