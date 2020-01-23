@extends('index')

@section('header')
    <header style="height: 100%;min-height: 30rem;padding-bottom: 0" class="masthead ">
        <div class="container ">
            <div class="row h-100 align-items-center justify-content-center text-center wow bounceInRight">
                <div class="col-lg-12 align-self-end ">
                    <h1 style="padding-top: 150px;font-family: 'Parisienne', cursive;font-size: 6.5vw;color: white"><b>Mision y Vision de la Academia</b></h1>
                </div>

            </div>
        </div>
    </header>
@endsection

@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col">
                <img hspace="5" src="{{ asset('imagen_user/fondoInicio.jpg') }}" class="img-fluid rounded float-right" width="40%" alt="">
                <h2 style="font-weight: 700;font-family: 'Montserrat', sans-serif;">Mision</h2>
                <p style="font-weight: 700;font-family: 'Montserrat', sans-serif;">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium harum modi officiis
                    asperiores, pariatur est blanditiis voluptates, reiciendis nobis ea cupiditate non porro
                    repudiandae nemo aperiam voluptatum dolor, totam aliquid?
                </p>
                <br>
                <p style="font-weight: 700;font-family: 'Montserrat', sans-serif;">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero perferendis harum quod facilis
                    est? Reiciendis, natus nemo inventore nostrum tempore corporis dicta cum maiores quasi sint
                    perspiciatis et eos eaque.
                </p>
            </div>
        </div>
    </div>
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col">
                <img hspace="5" src="{{ asset('imagen_user/fondoInicio.jpg') }}" class="img-fluid rounded float-right" width="40%" alt="">
                <h2 style="font-weight: 700;font-family: 'Montserrat', sans-serif;">Vision</h2>
                <p style="font-weight: 700;font-family: 'Montserrat', sans-serif;">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium harum modi officiis
                    asperiores, pariatur est blanditiis voluptates, reiciendis nobis ea cupiditate non porro
                    repudiandae nemo aperiam voluptatum dolor, totam aliquid?
                </p>
                <br>
                <p style="font-weight: 700;font-family: 'Montserrat', sans-serif;">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero perferendis harum quod facilis
                    est? Reiciendis, natus nemo inventore nostrum tempore corporis dicta cum maiores quasi sint
                    perspiciatis et eos eaque.
                </p>
            </div>
        </div>
    </div>

    <br>

@endsection