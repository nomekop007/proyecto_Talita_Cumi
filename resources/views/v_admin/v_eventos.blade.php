@extends('home')

@section('ubicacion')
    <section class="content-header">
        <h1>
            Eventos
            <small>Panel administrativo</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fas fa-align-justify"></i> Menu</a></li>
            <li class="active">Eventos</li>
        </ol>
    </section>
@endsection


@section('contenido')
<div class="form-row">
    <div class="form-group col-md-12">
        <p class="bg-info text-center">
            Eventos del sitio web
        </p>
        <br>
        <table class="table mi-dataTable text-center">
            <thead class="thead-dark ">
                <tr>
                    <th scope="col">
                        Titulo
                    </th>
                    <th scope="col">
                        Fecha
                    </th>
                    <th scope="col">
                        Foto
                    </th>
                    <th scope="col">
                        Descripcion
                    </th>
                    <th scope="col">
                        Acciones
                    </th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('jsextra')
<script src="{{ asset('js/evento.js')}}">
</script>
@endsection