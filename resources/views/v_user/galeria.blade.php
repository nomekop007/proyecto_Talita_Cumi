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


@section('galeria')
    <div class="container">
        <div class="row">
            <div class="card" id="galeriaImagenes"><br>
                <div class="card-body ">
                    <div class="row">
                        <div class="col-sm-4 mb-2">
                            <a id="" data-fancybox="gallery" href="{{ asset('imagen_user/fondoInicio.jpg') }}"><img src="{{ asset('imagen_user/fondoInicio.jpg') }}"></a>
                        </div>
                        <div class="col-sm-4 mb-2">
                            <a data-fancybox="gallery" href="{{ asset('imagen_user/fondoInicio.jpg') }}"><img
                                        src="{{ asset('imagen_user/fondoInicio.jpg') }}"></a>
                        </div>
                        <div class="col-sm-4 mb-2">
                            <a data-fancybox="gallery" href="{{ asset('imagen_user/fondoInicio.jpg') }}"><img
                                        src="{{ asset('imagen_user/fondoInicio.jpg') }}"></a>
                        </div>
                        <div class="col-sm-4 mb-2">
                            <a id="" data-fancybox="gallery" href="{{ asset('imagen_user/fondoInicio.jpg') }}"><img src="{{ asset('imagen_user/fondoInicio.jpg') }}"></a>
                        </div>
                        <div class="col-sm-4 mb-2">
                            <a data-fancybox="gallery" href="{{ asset('imagen_user/fondoInicio.jpg') }}"><img
                                        src="{{ asset('imagen_user/fondoInicio.jpg') }}"></a>
                        </div>
                        <div class="col-sm-4 mb-2">
                            <a data-fancybox="gallery" href="{{ asset('imagen_user/fondoInicio.jpg') }}"><img
                                        src="{{ asset('imagen_user/fondoInicio.jpg') }}"></a>
                        </div>
                        <div class="col-sm-4 mb-2">
                            <a id="" data-fancybox="gallery" href="{{ asset('imagen_user/fondoInicio.jpg') }}"><img src="{{ asset('imagen_user/fondoInicio.jpg') }}"></a>
                        </div>
                        <div class="col-sm-4 mb-2">
                            <a data-fancybox="gallery" href="{{ asset('imagen_user/fondoInicio.jpg') }}"><img
                                        src="{{ asset('imagen_user/fondoInicio.jpg') }}"></a>
                        </div>
                        <div class="col-sm-4 mb-2">
                            <a data-fancybox="gallery" href="{{ asset('imagen_user/fondoInicio.jpg') }}"><img
                                        src="{{ asset('imagen_user/fondoInicio.jpg') }}"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection