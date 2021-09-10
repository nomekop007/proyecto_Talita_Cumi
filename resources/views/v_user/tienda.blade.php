@extends('index')

@section('header')
    <header style="height: 100%;min-height: 30rem;padding-bottom: 0" class="masthead menu">
        <div class="container ">
            <div class="row h-100 align-items-center justify-content-center text-center wow bounceInRight">
                <div class="col-lg-12 align-self-end ">
                    <h1 style="padding-top: 150px;font-family: 'Parisienne', cursive;font-size: 6.5vw;color: white"><b>Tienda de Muestra de la Academia</b></h1>
                </div>

            </div>
        </div>
    </header>
@endsection

@section('contenido')

    <div class="container">
        <div class="row">
            
            @foreach($tienda as $p)
                    <div class="col-sm-4 mb-3">
                    <div class="card ">
                        <form action="{{ route('vista_detalleTienda') }}" method="get">
                         <input name="id" type="hidden" value="{{base64_encode($p->id)}}">
                        <input type=image class="card-img" style="height: 350px; width: 100%; display: block;" src="{{ Storage::url($p->URLpublicacion) }}" alt="Card image cap" >
                        </form>
                            <div class="card-body text-center">
                              <h3 class="card-title">{{$p->tituloPublicacion}}</h3>
                                 <p class="card-text">Precio : ${{$p->precio}} </p>
                            </div>

                    </div>
                    </div>
            @endforeach
            
        </div>
    </div>

    <br>

@endsection
