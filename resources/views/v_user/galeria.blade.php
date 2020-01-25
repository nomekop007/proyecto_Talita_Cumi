@extends('index')

@section('header')
    <header style="height: 100%;min-height: 30rem;padding-bottom: 0" class="masthead ">
        <div class="container ">
            <div class="row h-100 align-items-center justify-content-center text-center wow bounceInRight">
                <div class="col-lg-12 align-self-end ">
                    <h1 style="padding-top: 150px;font-family: 'Parisienne', cursive;font-size: 6.5vw;color: white"><b>Galeria de la Academia</b></h1>
                </div>

            </div>
        </div>
    </header>
@endsection


@section('contenido')
    <div class="container">
        <div class="row">
            <div class="card" id="galeriaImagenes"><br>
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
    </div>
@endsection