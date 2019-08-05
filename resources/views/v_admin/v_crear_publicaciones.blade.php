@extends('home')

@section('ubicacion')
    <section class="content-header">
        <h1>
            Crear publicacion
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
                crear publicacion
            </li>
        </ol>
    </section>
@endsection


@section('contenido')
    <form
            id="formulario"
            method="POST"
            action="{{ route('crearPublicacion') }}"
            enctype="multipart/form-data">

        {{ csrf_field() }}
        <div class="form-row">
            <div class="form-group col-md-12">
                <p class="bg-info text-center">
                    Crear Publicacion en el sitio web
                </p><br>
                <div class="form row">

                    <div class="form-group col-md-6">
                        <label for="titulo_publicacion">
                            Titulo Publicacion
                        </label>
                        <input class="form-control" id="titulo_publicacion" maxlength="30" name="titulo_publicacion"
                               placeholder="ingrese un titulo" type="text">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="tipo_publicacion">
                            Tipo Publicacion
                        </label>
                        <br>
                        <select class="form-control combo" id="tipo_publicacion" name="tipo_publicacion">

                        </select>
                        </br>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="Categoria">
                            Ubicacion de la Publicacion
                        </label>
                        <br>
                        <select class="form-control" id="Categoria" name="Categoria">
                            <option value="1">
                                En Galeria multimedia
                            </option>
                            <option value="2">
                                Pagina de Inicio
                            </option>
                            <option value="3">
                                Tienda Online
                            </option>
                        </select>
                        </br>
                    </div>
                    <div class="form-group col-md-6 URLmedia">
                        <label for="URLpublicacion">
                            Insertar foto
                        </label>
                        <input id="URLpublicacion" name="URLpublicacion" type="file" accept="image/*">
                    </div>
                    <div class="form-group col-md-12">

                        <div class="box box-info">
                            <div class="box-header">
                                <h3 class="box-title">Descripcion
                                    <small>CK Editor</small>
                                </h3>
                                <!-- tools box -->
                                <div class="pull-right box-tools">
                                    <button type="button" class="btn btn-info btn-sm" data-widget="collapse"
                                            data-toggle="tooltip"
                                            title="Collapse">
                                        <i class="fa fa-minus"></i></button>
                                </div>
                                <!-- /. tools -->
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body pad">
                    <textarea id="descripcion_publicacion" name="descripcion_publicacion"
                              placeholder="ingrese texto aqui" rows="10" cols="80">
                    </textarea>
                            </div>
                        </div>

                    </div>


                    <div class="form-group col-md-12">
                        <button class="btn btn-primary btn-sm"
                                id="btnEnviar"
                                type="submit">
                            Crear Publicacion
                        </button>
                    </div>
                    <div class="barra form-group col-md-12">
                        <div class="barra_azul" id="barra_estado">
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

@section('jsextra')
    <script src="{{ asset('js/publicacion.js')}}"></script>
    <script>
        $(function () {
            CKEDITOR.replace('descripcion_publicacion')
        })
    </script>
@endsection