@extends('index')

@section('header')
<header class="masthead menu" style="height: 100%;min-height: 20rem;padding-bottom: 0">
    <div class="container ">
        <div class="row">
            <div class="col-lg-12" style="position: relative;margin-top: 500px">

            </div>
        </div>
    </div>
    <h1 class="wow bounceInRight text-center" style="font-family: ginebra;font-size:10vh;color: white;background-color: black;">
        <a>Galería de la Academia</a>
    </h1>
</header>
@endsection


@section('contenido')
<div class="container">
    <div class="row">
        <div class="card" id="galeriaImagenes"><br>
        <div class="container">
            <div class="card-body ">
                <div class="row">
                    @if($galeria == '[]')
                    <div class="col-md-12">
                        <h6 class="text-center">- No hay Fotos Disponibles -</h6>
                    </div>
                    @endif
                    <div class="owl-carousel owl-theme">
                        @foreach($galeria as $p)
                        @if($p->tipo == 1)



                        <a data-fancybox="gallery" href="{{ Storage::url($p->URLpublicacion) }}">
                            <img id="img_gallery"  src="{{ Storage::url($p->URLpublicacion) }}"></a>

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
            <br>

        </div>

    </div>
    <br>
</div>
@endsection