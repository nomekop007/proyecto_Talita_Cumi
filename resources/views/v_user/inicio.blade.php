@extends('index')


@section('header')
<header style="height: 100%;min-height: 20rem;padding-bottom: 0" class="masthead menu">

    <div class="container">
        <div class="row">
            <div class="col-lg-12 " style="position: relative;margin-top: 500px">
              
            </div>

        </div>
    </div>
  <h1 class="wow bounceInRight titulopage rounded text-center" style="font-size: 10vh;color: white;margin-top: 20px;background-color: black;font-family: ginebra;"><a>Ballet Cristiano Talita-Cumi</a></h1>


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
                        <a title="Los Tejos" href="https://ballettalitacumi.blogspot.com/?m=1">
                            <img src="/imagen_user/blog.jpg" style="height: 530px; width: 100%; display: block;" alt="...">
                        </a>
                    </div>
                    @foreach($inicio as $p)
                    <div class="carousel-item ">
                        <form action="{{ route('vista_detallePublicacion') }}" method="get">
                            {{ csrf_field() }}
                            <input name="id" type="hidden" value="{{base64_encode($p->id)}}">

                            <input type=image alt="First slide" style="height: 530px; width: 100%; display: block;" src="{{ Storage::url($p->URLpublicacion) }}">
                        </form>
                    </div>
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
                <h1 style="font-family: 'Montserrat', sans-serif; text-align: center">Eventos destacados</h1>
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
                @if($eventos == '[]')
                <h6 class="text-center">- No hay eventos Disponibles -</h6>
                @endif
                @foreach($eventos as $e)
                <div class="post">
                    <form method="get" action="{{ route('vista_detalleEvento') }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{base64_encode($e->id)}}">

                        <div class="card mb-4 box-shadow">

                            <input type=image class="card-img-top" alt="" src="{{ Storage::url($e->URLfoto) }}" data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">

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

                @endforeach
            </div>

        </div>

    </div>

    <br>
    <!--boton remplazado por a -->
    <!--
    <l style="background-color:black" class="btn btn-lg wow bounceInRight">
        <a style="color: white;" href="{{ route('vista_eventos') }}">
    <span> Ver todos los eventos →</span></a></l> -->
</div>

<br><br>


<div class="container wow bounceInLeft ">
    <h1 style="font-family: 'Montserrat', sans-serif; text-align: center" class="text-center">Galería de la Academia
    </h1>
    <div class="card box-shadow" id="galeriaImagenes"><br>
        @if($galeria == '[]')
        <div class="col-sm-12 mb-12"><br>
            <h6 class="text-center">- No hay Fotos Disponibles -</h6>
        </div>
        @endif
        <div class="card-body ">
            <div class="row">
                <div class="owl-carousel owl-theme">
                    @foreach($galeria as $p)

                    @if($p->tipo == 1)


                    <a data-fancybox="gallery" href="{{ Storage::url($p->URLpublicacion) }}">
                        <img src="{{ Storage::url($p->URLpublicacion) }}"></a>

                    @endif

                    @if($p->tipo == 2)

                    <a data-fancybox="gallery" href="{{ Storage::url($p->URLpublicacion) }}">
                        <img src=""></a>


                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<br><br>

<section>
    <div class="container wow bounceInRight">
        <div class="row">
            <div class="col">
                <h1 style="font-family: 'Montserrat', sans-serif; text-align: center">Ubicación</h1>
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

<br>

<div class="container wow bounceInLeft">
    <div class="row">

        <div class="col-md-4 data-container">
            <div class="card mb-4 box-shadow">

                <figure class="imghvr-fade">
                    <img class="card-img-top" style="height: 400px; width: 100%; display: block; " src="{{ asset('imagen_user/pamela.jfif') }}" data-holder-rendered="true">

                    <figcaption style="font-family: 'Montserrat', sans-serif;">
                        <h3 class="text-center"><b>Pamela Bizama Saavedra</b></h3>
                        <p class="text-center"><b>Directora y Profesora Ballet Clásico</b></p>
                    </figcaption>
                </figure>



                <div class="card-body" style="font-family: 'Montserrat', sans-serif;font-size: 1.6vh">
                    <h5 class="text-center"><b>Pamela Bizama Saavedra</b></h5>
                    <h6 style="border-style: solid;color:#6A0888" class="text-center rounded"><b>Directora <br> y <br> Profesora Ballet Clásico</b></h6>
                    <b>
                        <b class="btn" style="font-size: 1.8vh;font-weight:bold;color:#6A0888" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse3">
                            <i class="fas fa-chevron-circle-down "></i> Ver Biografia
                        </b>
                        <p id="collapse3" aria-labelledby="heading3" class=" collapse  card-text text-justify text-muted">
                            Vive en la ciudad de Talca de profesión Ingeniero Forestal. Directora y profesora de ballet Talita Cumi desde su fundación el año 2008. Sus inicios en ballet comenzaron a partir del año 2001 como un llamado de Dios para formar un ministerio de danza. Desde el año 2004 hasta el 2010 formó parte del ballet de Yolanda Toledo en el teatro regional del Maule participando en obras como mi fiesta de compromiso, pas de deux, Danubio azul, vals de las flores, nocturno de Chopin, valas triste. Posteriormente, partició de cursos intensivos de ballet. Se ha desempeñado como profesora de ballet en el Colegio amor de Dios, Colegio Baltazar, Academia Ballet imágenes San Javier y Colegio Inglés, donde actualmente imparte clases.
                        </p>
                    </b>
                    <div class="d-flex justify-content-between align-items-center">

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 data-container">
            <div class="card mb-4 box-shadow">

                <figure class="imghvr-fade">
                    <img class="card-img-top" style="height: 400px; width: 100%; display: block; " src="{{ asset('imagen_user/francica.jfif') }}" data-holder-rendered="true">

                    <figcaption style="font-family: 'Montserrat', sans-serif;">
                        <h3 class="text-center"><b>María Francisca Parra Vera</b></h3>
                        <p class="text-center"><b>Directora y Profesora Ballet Clásico</b></p>
                    </figcaption>
                </figure>





                <div class="card-body" style="font-family: 'Montserrat', sans-serif;">
                    <h5 class="text-center"><b>María Francisca Parra Vera</b></h5>

                    <h6 style="border-style: solid;color:#6A0888" class="text-center rounded"><b>Directora <br> y <br> Profesora Ballet Clásico</b></h6>


                    <b>
                        <b class="btn" style="font-size: 1.8vh;font-weight:bold;color:#6A0888" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
                            <i class="fas fa-chevron-circle-down "></i> Ver Biografia
                        </b>
                        <p id="collapse2" aria-labelledby="heading2" class="collapse  card-text text-justify text-muted" style="font-size: 1.6vh">
                            Nació en Talca, Chile. Co Directora y Profesora de Ballet Talita-Cumi. De Profesión Kinesióloga, actualmente dedicada a la Rehabilitación Músculo-Esquelética y Neurológica. Inició desde niña en el área artística practicando Gimnasia Rítmica, luego al paso de los años creció conociendo a Dios y amándole tanto que nació el deseo de reverenciar y expresar a través del Arte la Gratitud a Él, aprendiendo a adorar a Jesús junto a Pamela Bizama, en el Ministerio de Danza de la Comunidad Cristiana de Talca. Fue perfeccionando su pasión tomando Clases de Ballet con la Profesora Yolanda Toledo en el Teatro Regional del Maule, en donde representó obras como Les Syplhides, Adagios, Vals de las Flores, La Muerte del Cisne, Danubio Azul, Pas de Quatre y Nocturno de Chopín. Siguió complementando sus estudios con Clases de Danza intensivas particulares. Comenzó a transmitir el deseo de su corazón en Ballet Talita-Cumi desde su fundación el año 2008, en enseñanza y creación coreográfica; también realizando Clases de Ballet en los colegios Amor de Dios y Colegio Inglés de Talca. Actualmente sigue creciendo la carga que Dios ha puesto en su corazón de entregar su palabra a todo lugar, y llegar a muchas personas que puedan conocer a Cristo a través de la expresión artística visual que llega al corazón a través de una Danza armoniosa y pura que trae gozo y libertad.

                        </p>
                    </b>
                    <div class="d-flex justify-content-between align-items-center">

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 data-container">
            <div class="card mb-4 box-shadow">

                <figure class="imghvr-fade">
                    <img class="card-img-top img-girl" style="height: 400px; width: 100%; display: block; " src="{{ asset('imagen_user/leticia.jfif') }}" data-holder-rendered="true">

                    <figcaption style="font-family: 'Montserrat', sans-serif;">
                        <h3 class="text-center"><b>Leticia Rego Goveia Soares</b></h3>
                        <p class="text-center"><b>Profesora Danza contemporánea jazz</b></p>
                    </figcaption>
                </figure>



                <div class="card-body" style="font-family: 'Montserrat', sans-serif;">
                    <h5 class="text-center"><b>Leticia Rego Goveia Soares</b></h5>
                    <h6 style="border-style: solid;color:#6A0888" class="text-center rounded"><b>Profesora<br>Danza contemporánea <br>jazz</b></h6>
                    <b>
                        <b class="btn" style="font-size: 1.8vh;font-weight:bold;color:#6A0888" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                            <i class="fas fa-chevron-circle-down "></i> Ver Biografia
                        </b>
                        <p id="collapse1" aria-labelledby="heading1" class=" collapse card-text text-justify text-muted" style="font-size:1.6vh">
                            Pedagoga. Fue bailarina en Brasilia de la Academia de Ballet Fernandha Fernández Método Royal. Actualmente estudiando el método Vaganova de la Universalidad de danza de Brasil con formación prevista para 2021. Profesora también en otras comunas de la región del Maule. Cuenta con coreografías premiadas en el Certamen Interamericano CIAD 2020.
                        </p>
                    </b>
                    <div class="d-flex justify-content-between align-items-center">

                    </div>
                </div>
            </div>
        </div>
       
     

    </div>
</div>
<br>
<br>
<br>
<br>



@endsection