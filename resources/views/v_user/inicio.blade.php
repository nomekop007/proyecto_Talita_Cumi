@extends('index')


@section('header')
    <header style="height: 100%;min-height: 30rem;padding-bottom: 0" class="masthead menu">
        <div class="container ">
            <div class="row h-100 align-items-center justify-content-center text-center wow bounceInRight ">
                <div class="col-lg-12 align-self-end ">
                    <h1 style="padding-top: 150px;font-family: 'Parisienne', cursive;font-size: 6.5vw;color: white"><b>Ballet
                            Cristiano Talita-Cumi</b></h1>
                </div>

            </div>
        </div>
    </header>
@endsection

@section('contenido')

<br><br>
    <section class="wow bounceInRight">
        <h1 style="font-family: 'Montserrat', sans-serif; text-align: center ">Aspectos destacados</h1>
    </section>

    <div class="container wow bounceInLeft">
    <div class="row">
        <div class="col-md-12 mx-auto">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner tam">
                    <div class="carousel-item active">
                        <img src="/imagen_user/2019.jpg" style="height: 450px; width: 100%; display: block;" alt="...">
                    </div>
                    @foreach($publicaciones as $p)
                        @if($p->categoria == 2)
                            @if($p->estado == 'activo')
                                <div class="carousel-item ">

                                    @if($p->tipo == 1)
                    <form action="{{ route('vista_detallePublicacion') }}" method="get">
                    {{ csrf_field() }}
                    <input name="id" type="hidden" value="{{base64_encode($p->id)}}">

                                        <input type=image alt="First slide" style="height: 450px; width: 100%; display: block;" 
                                             src="{{ Storage::url($p->URLpublicacion) }}">
                     </form>
                                    @endif

                                    @if($p->tipo == 2)
                                        <video alt="First slide" style="height: 450px; width: 100%; display: block;" controls width=500>
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
    </div>
   

    <br><br>
    <section>
        <div class="container wow bounceInRight">
            <div class="row">
                <div class="col">
                    <h1 style="font-family: 'Montserrat', sans-serif; text-align: center">Proximos eventos</h1>
                </div>
            </div>
        </div>
    </section>

<div class="container wow bounceInLeft">
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
                                <form 
                                 method="get"
                                action="{{ route('vista_detalleEvento') }}">
                                 {{ csrf_field() }}
                                 <input type="hidden" name="id" value="{{base64_encode($e->id)}}">

                                <div class="card mb-4 box-shadow">

                                    <input type=image class="card-img-top" alt="" src="{{ Storage::url($e->URLfoto) }}"
                                         data-holder-rendered="true"
                                         style="height: 225px; width: 100%; display: block;">
                                          
                                    <div class="card-body" style="font-family: 'Montserrat', sans-serif;">
                                        <h5>{{$e->tituloEvento}}</h5>
                                        <p>{{$e->ubicacion}}</p>
                                        <div class="d-flex justify-content-between align-items-center  ">
                                            <small class="text-muted ">{{$e->fecha->toFormattedDateString() }}</small>
                                            
                                        </div>
                                    </div>
                                </div>
                                </form>
                            </div>
                        @endif
                    @endforeach
                </div>

            </div>

        </div>

    <br>
    <!--boton remplazado por a -->
    <l style="background-color:black" class="btn btn-lg wow bounceInRight">
        <a style="color: white;" href="{{ route('vista_eventos') }}">
            <span> Ver todos los eventos →</span></a></l>
</div>

    <br><br>


    <div class="container wow bounceInLeft">
        <div class="card" id="galeriaImagenes"><br>
            <h1 style="font-family: 'Montserrat', sans-serif; text-align: center" class="text-center">Galeria multimedia</h1>
            <div class="card-body ">
                <div class="row">
                    @foreach($publicaciones as $p)
                    @if( $loop->index <= 6 )
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
                    @endif
                        
                    @endforeach


                </div>
            </div>
        </div>
    </div>

    <br><br>

    <section>
        <div class="container wow bounceInRight">
            <div class="row">
                <div class="col">
                    <h1 style="font-family: 'Montserrat', sans-serif; text-align: center">Ubicacion</h1>
                </div>
            </div>
        </div>
    </section>


    <div id="map" class="container map wow bounceInLeft" style="height: 300PX">
    </div>

    <br><br>

    <section>
        <div class="container wow bounceInRight">
            <div class="row">
                <div class="col">
                    <h1 style="font-family: 'Montserrat', sans-serif; text-align: center">Profesores de la Academia</h1>
                </div>
            </div>
        </div>
    </section>


    <div class="container wow bounceInLeft">
        <div class="row">

            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" alt="" src="{{ asset('imagen_user/usuarios.jpeg') }}"
                         data-holder-rendered="true"
                         style="height: 225px; width: 100%; display: block;">
                    <div class="card-body" style="font-family: 'Montserrat', sans-serif;">
                        <h4 class="text-center">This is a wider card</h4>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional
                            content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                          
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" alt="" src="{{ asset('imagen_user/usuarios.jpeg') }}"
                         data-holder-rendered="true"
                         style="height: 225px; width: 100%; display: block;">
                    <div class="card-body" style="font-family: 'Montserrat', sans-serif;">
                        <h4 class="text-center">This is a wider card</h4>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional
                            content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                          
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" alt="" src="{{ asset('imagen_user/usuarios.jpeg') }}"
                         data-holder-rendered="true"
                         style="height: 225px; width: 100%; display: block;">
                    <div class="card-body" style="font-family: 'Montserrat', sans-serif;">
                        <h4 class="text-center">This is a wider card</h4>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional
                            content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    
    <section>
        <div class="container wow bounceInLeft">
            <div class="row">
                <div class="col">
                    <h1 style="font-family: 'Montserrat', sans-serif; text-align: center">Siguenos en nuestras redes sociales</h1>
                </div>
            </div>
        </div>
    </section>

    <br>

    <div class="text-center wow bounceInRight">
        <a href="https://www.facebook.com/balletcristiano.talitacumi.9"><img src="{{ asset('imagen_user/facebooklogo.png') }}" alt="" width="50"></a>
        <a href="https://www.instagram.com/ballettalitacumi/?hl=es-la"><img src="{{ asset('imagen_user/instagramlogo.png') }}" alt="" width="50"></a>
    </div>
    <br>
    <br>
    <br>
@endsection

