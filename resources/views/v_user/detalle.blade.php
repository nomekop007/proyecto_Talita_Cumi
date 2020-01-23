@extends('index')

@section('header')
    <header style="min-height: 4.5rem;">
        
    </header>
@endsection


@section('contenido')

@if($tipo == 0)
    <div class="container">
        <div class="row">
           <h5>esto sera el detalle evento!! de : {{$objeto->tituloEvento}}</h5>
        </div>

    </div>
@endif

@if($tipo == 1)
     <div class="container">
        <div class="row">
           <h5>esto sera el detalle publicacion!! de : {{$objeto->tituloPublicacion}}</h5>
        </div>
    </div>
@endif
<br><br><br><br><br><br><br><br><br><br>
@endsection