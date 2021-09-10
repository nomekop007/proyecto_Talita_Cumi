@extends('index')

@section('header')
<header class="masthead menu" style="height: 100%;min-height: 20rem;padding-bottom: 0">
    <div class="container ">
        <div class="row">
            <div class="col-lg-12" style="margin-top: 500px;position: relative;">

            </div>
        </div>
    </div>
    <h1 class="wow bounceInRight rounded text-center" style=" background-color: black ;font-family: ginebra;margin-top: 20px;font-size: 10vh;color: white">

        Eventos de la Academia

    </h1>
</header>
@endsection

@section('contenido')
<div class="container">
    <div class="row">
        @foreach($eventos as $e)
        @if($e->estado == 'activo')
        <div class="col-md-12">
            <div class="card mb-4 box-shadow {{ $e->id }}">
                <form action="{{ route('vista_detalleEvento') }}" method="get">
                    {{ csrf_field() }}
                    <input name="id" type="hidden" value="{{base64_encode($e->id)}}">
                    <input type=image class="card-img-top" data-holder-rendered="true" src="{{ Storage::url($e->URLfoto) }}" style="height:auto; width: 100%; display: block;">
                </form>
                <div class="card-body" style="font-family: 'Montserrat', sans-serif;">
                    <h4 class="text-center">
                        {{$e->tituloEvento}}
                    </h4>
                    <div class="d-flex justify-content-between align-items-center">
                        <small class="text-muted">
                            {{$e->fecha}}
                        </small>
                        <small class="text-muted">
                            {{$e->ubicacion}}
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@endforeach
@endsection