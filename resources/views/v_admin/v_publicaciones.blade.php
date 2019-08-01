@extends('home')

@section('ubicacion')
<section class="content-header">
    <h1>
        Publicaciones
        <small>
            Panel administrativo
        </small>
    </h1>
    <ol class="breadcrumb">
        <li>
            <a href="#">
                <i class="fas fa-align-justify">
                </i>
                Menu
            </a>
        </li>
        <li class="active">
            Publicaciones
        </li>
    </ol>
</section>
@endsection


@section('contenido')
<div class="form-row">
    <div class="form-group col-md-12">
        <p class="bg-info text-center">
            Publicaciones del sitio web
        </p>
        <br>
            <table class="table mi-dataTable text-center">
                <thead class="thead-dark ">
                    <tr>
                        <th scope="col">
                            Titulo
                        </th>
                        <th scope="col">
                            Tipo
                        </th>
                        <th scope="col">
                            Categoria
                        </th>
                        <th scope="col">
                            Media
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
                    @foreach($publicaciones as $p)
                    <tr>
                        <td>
                            {{ $p->tituloPublicacion }}
                        </td>
                        <td>
                           
                        </td>
                        <td>
                            
                        </td>
                        <td>
                           
                        </td>
                        <td>
                        
                        </td>
                        <td>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </br>
    </div>
</div>
@endsection

@section('jsextra')
<script src="{{ asset('js/publicacion.js')}}">
</script>
@endsection
