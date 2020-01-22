@extends('index')

@section('header')
    <header style="height: 100%;min-height: 30rem;padding-bottom: 0" class="masthead ">
        <div class="container ">
            <div class="row h-100 align-items-center justify-content-center text-center wow bounceInRight">
                <div class="col-lg-12 align-self-end ">
                    <h1 style="padding-top: 150px;font-family: 'Parisienne', cursive;font-size: 6.5vw;color: white"><b>Eventos de la Academia</b></h1>
                </div>

            </div>
        </div>
    </header>
@endsection

@section('contenido')

    <div class="container">
        <div class="row">
            @foreach($eventos as $e)
                @if($e->estado == 'activo')
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow {{ $e->id }}">
                            <img
                                 class="card-img-top" alt="" src="{{ Storage::url($e->URLfoto) }}"
                                 data-holder-rendered="true"
                                 style="height: 225px; width: 100%; display: block;">
                            <div class="card-body" style="font-family: 'Montserrat', sans-serif;">
                                <h4  class="text-center">{{$e->tituloEvento}}</h4>

                                <p class="card-text text-center">{{$e->descripcionEvento}}</p>

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




@endsection