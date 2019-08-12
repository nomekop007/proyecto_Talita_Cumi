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
                <p class="barra_roja text-center">
                    Crear Publicacion en el sitio web
                </p><br>
                <div class="form row">


                    <div class="form-group col-md-6">
                        <label for="Categoria">
                            seleccionar Ubicacion
                        </label>
                        <select class="form-control" id="Categoria" name="Categoria">
                            <option value="2" class="inicio">
                                En pagina de Inicio
                            </option>
                            <option value="1" class="galeria">
                                En galeria multimedia
                            </option>
                            <option value="3" class="tienda">
                                En Tienda Online
                            </option>
                        </select>
                    </div>

                    <div class="form-group col-md-6 seleccionar">
                        <br>
                        <button class="btn btn-primary btn-sm"
                                id="btnSeleccionar"
                                type="submit">
                            seleccionar
                        </button>
                    </div>

                    <div class="form-group col-md-6 titulo" hidden>
                        <label for="titulo_publicacion">
                            Titulo Publicacion
                        </label>
                        <input class="form-control" id="titulo_publicacion" maxlength="40" name="titulo_publicacion"
                               placeholder="ingrese un titulo" type="text">
                    </div>


                    <div class="form-group col-md-6 tipo" hidden>
                        <label for="tipo_publicacion">
                            Tipo Publicacion
                        </label>
                        <select class="form-control combo" id="tipo_publicacion" name="tipo_publicacion">
                        </select>
                    </div>
                    <div class="form-group col-md-6 URLmedia" hidden>
                        <label for="URLpublicacion">
                            Insertar foto
                        </label>
                        <input id="URLpublicacion" name="URLpublicacion" type="file" accept="image/*">
                    </div>


                    <div class="form-group col-md-12 descripcion" >

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
                    <br>
                    <div class="form-group col-md-12 enviar" hidden>
                        <button class="btn btn-primary btn-sm"
                                id="btnEnviar"
                                type="submit">
                            Crear Publicacion
                        </button>
                        <br>
                        <code>
                            <div class="progress progress-sm active">
                                <div class="progress-bar progress-bar-light-blue progress-bar-striped bar"  role="progressbar"
                                     aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                    <span class="sr-only">20% Complete</span>
                                </div>
                            </div>
                        </code>
                        <div class="overlay text-center btn" id="subiendo" >
                            <i class="fa fa-refresh fa-spin fa-1x"> </i>
                            <h6>subiendo...</h6>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </form>


@endsection

@section('jsextra')
    <script src="{{ asset('js/js_admin/publicacion.js')}}"></script>
    <script>
        $(function () {
            CKEDITOR.replace('descripcion_publicacion')
        })
    </script>
@endsection