@extends('index')

@section('contenido')
    <br><br>



    <h1 class="text-center" style="background-color: transparent;font-family: 'Montserrat', sans-serif;">Eventos de
        Talita-Cumi</h1>
    <br><br>


    <div class="container">
        <div class="row">
            @foreach($eventos as $e)
                @if($e->estado == 'activo')
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top" alt="" src="{{ Storage::url($e->URLfoto) }}"
                                 data-holder-rendered="true"
                                 style="height: 225px; width: 100%; display: block;">
                            <div class="card-body" style="font-family: 'Montserrat', sans-serif;">
                                <h4 class="text-center">{{$e->tituloEvento}}</h4>

                                <p class="card-text text-center">Lorem ipsum dolor sit aicing elit. Cupiditate,laboriosam molestias natus nemo odio. Alias dicta e
                                    ligendi et fugit ma, omnis, quaerat.</p>

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