@extends('index')

@section('contenido')
    <br><br>



    <h1 class="text-center" style="background-color: transparent;font-family: 'Montserrat', sans-serif;">Eventos de
        Talita-Cumi</h1>
    <br><br>

    <!--
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
                                <h4 class="text-center">This is a wider card</h4>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to
                                    additional
                                    content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">18 de Agosto</small>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach

        </div>
    </div>
-->



    <section class="carousel slide" data-ride="carousel" id="postsCarousel">
        <div class="container">
            <div class="row">
                <div class="col-12 text-right mb-4">
                    <a class="btn btn-outline-secondary prev" href="" title="go back"><i class="fa fa-lg fa-chevron-left"></i></a>
                    <a class="btn btn-outline-secondary next" href="" title="more"><i class="fa fa-lg fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
        <div class="container p-t-0 m-t-2 carousel-inner">
            <div class="row row-equal carousel-item active m-t-0">
                @foreach($eventos as $e)
                    @if($e->estado == 'activo')
                        <div class="col-md-4">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top" alt="" src="{{ Storage::url($e->URLfoto) }}"
                                     data-holder-rendered="true"
                                     style="height: 225px; width: 100%; display: block;">
                                <div class="card-body" style="font-family: 'Montserrat', sans-serif;">
                                    <h4 class="text-center">{{$e->tituloEvento}}</h4>
                                    <p class="card-text">{{$e->fechaInicio}}</p>
                                    <p class="card-text">{{$e->fechaFin}}o</p>

                                    <div class="d-flex justify-content-between align-items-center">
                                        <small class="text-muted">18 de Agosto</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="row row-equal carousel-item m-t-0">
                @foreach($eventos as $e)
                    @if($e->estado == 'activo')
                        <div class="col-md-4">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top" alt="" src="{{ Storage::url($e->URLfoto) }}"
                                     data-holder-rendered="true"
                                     style="height: 225px; width: 100%; display: block;">
                                <div class="card-body" style="font-family: 'Montserrat', sans-serif;">
                                    <h4 class="text-center">{{$e->tituloEvento}}</h4>
                                    <p class="card-text">{{$e->fechaInicio}}</p>
                                    <p class="card-text">{{$e->fechaFin}}o</p>

                                    <div class="d-flex justify-content-between align-items-center">
                                        <small class="text-muted">18 de Agosto</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>



    <br><br><br><br><br><br>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script>
        (function($){
            "use strict";
            $('.next').click(function(){ $('.carousel').carousel('next');return false; });
            $('.prev').click(function(){ $('.carousel').carousel('prev');return false; });
        })
        (jQuery);
    </script>



@endsection