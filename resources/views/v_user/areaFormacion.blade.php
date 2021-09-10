@extends('index')

@section('header')
<header class="masthead menu" style="height: 100%;min-height: 20rem;padding-bottom: 0"><meta charset="gb18030">
    <div class="container ">
        <div class="row h-100 align-items-center ">
            <div class="col-lg-12" style="position: relative;margin-top: 500px;">

            </div>
        </div>
    </div>
    <h1 class="text-center rounded wow bounceInRight" style="font-family: ginebra;font-size: 10vh ;color: white;background-color: black;">
        <a>Areas de Formación</a>
    </h1>
</header>
@endsection

@section('contenido')
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <img class="text-center" style="width:100%;height: 360px;" src="{{ asset('imagen_user/estamos-trabajando.png') }}">
            <br><br><br><br><br><br><br><br><br><br><br>

        </div>
        <div class="col-md-3"></div>

    </div>
</div>
@endsection