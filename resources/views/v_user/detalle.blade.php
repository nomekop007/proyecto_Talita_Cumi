@extends('index')

@section('header')
    <header style="min-height: 4.5rem;">
        
    </header>
@endsection


@section('contenido')

<!--ventana eventos -->

@if($tipo == 0)
    <div class="container">

        <div class="row">
        <div class="col-md-3">
             <h3> {{$objeto->tituloEvento}}</h3>
                <small>  {{ $objeto->fecha->format('l, j F, Y - H:i a') }}</small>
                <h6>  {{ $objeto->ubicacion }}</h6>
        </div>
             <div class="col-md-9">
                
                <input type="" name="des" id="descripcion" hidden="true" value="{{$objeto->descripcionEvento}}">

               <div id="descrip"></div>
                     
                
               
                   
             </div>
          
        </div>

    </div>
@endif

<!--ventana publicaciones -->
@if($tipo == 1)
     <div class="container col-md-9">
          <h1 class="text-center">{{$objeto->tituloPublicacion}} </h1>
        <div class="row">

           <div class="col-md-12" id="descrip">
                <input type="" name="des" id="descripcion" hidden="true" value="{{$objeto->descripcionPublicacion}}">

          </div>
        </div>
    </div>
@endif

<br><br><br><br><br><br><br><br><br><br>
@endsection