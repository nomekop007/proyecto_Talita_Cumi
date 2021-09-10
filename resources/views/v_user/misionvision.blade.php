@extends('index')

@section('header')
<header class="masthead menu" style="height: 100%;min-height: 20rem;padding-bottom: 0">
    <div class="container ">
        <div class="row">
            <div class="col-lg-12" style="margin-top: 500px;position: relative;">

            </div>
        </div>
    </div>
    <h1 class="text-center wow bounceInRight" style="font-family: ginebra;background-color: black;font-size: 10vh;color: white">
            Misión y Visión de la Academia
        </h1>
</header>
@endsection

@section('contenido')
<div style="height: 60px;"></div>
<div class="container text-justify">
    <div class="row">
        <div class="col-md-12">
            <h1 style="font-family: 'Montserrat', sans-serif;font-size: 7.5v"><b>Misión</b></h1>
        </div>

        <div class="col-md-7">
            <p style="font-family: 'Montserrat', sans-serif;font-size:2.5vh">
                <b>
                    Transmitir la Adoración a Dios a través de la danza a niñas,
                    jóvenes y adultos, desarrollando la gracia, expresión y creatividad
                    por medio del Ballet Clásico, Contemporáneo y Jazz, siempre con una
                    estrecha relación con Dios, Inspiradas por Él, entregando un mensaje
                    de Paz y Unidad.

                </b>
            </p>
        </div>
        <div class="col-md-5"><img class="rounded" style="width: 100%;height: 100%;" src="{{ asset('imagen_user/mision.jpg') }}">
        </div>

    </div>
    <div style="height: 60px;"></div>
    <div class="row">
        <div class="col-md-12 ">
            <h1 style="font-family: 'Montserrat', sans-serif;font-size: 7.5v"><b>Visión</b>
            </h1>
        </div>

        <div class="col-md-7">

            <p style="font-family: 'Montserrat', sans-serif;font-size:2.5vh">
                <b>
                    Entregar una formación Artística-Cristiana de excelencia en unidad
                    y amor, en donde Jesús es el Centro del Arte, desarrollando la
                    Danza, como una expresión de Fe, restauración y adoración a Dios,
                    dando a conocer su Palabra, que llegue a muchos corazones como una
                    danza viva en su Espíritu, “Talita-Cumi” Niña, a ti te digo
                    ¡¡¡Levántate!!!

                </b>
            </p>
        </div>
        <div class="col-md-5"><img class="rounded" style="width: 100%;height: 100%;" src="{{ asset('imagen_user/vision.jpg') }}">
        </div>

    </div>
    <br><br><br>
</div>

@endsection