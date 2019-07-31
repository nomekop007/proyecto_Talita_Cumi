@extends('home')

@section('ubicacion')
    <section class="content-header">
        <h1>
            crear publicacion
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
                </p>
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
                        <select class="form-control" id="tipo_publicacion" name="tipo_publicacion">
                            <option value="1">
                                Foto
                            </option>
                            <option value="2">
                                Video
                            </option>
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
                    <div class="form-group col-md-6">
                        <label for="URLpublicacion">
                            Insertar foto o video
                        </label>
                        <input id="URLpublicacion" name="URLpublicacion" type="file" accept="image/*, video/mp4" >

                    </div>
                    <div class="form-group col-md-12">
                        <div class="box">
                            <div class="box-header">
                                <h4 class="box-title">
                                    Descripcion
                                </h4>
                                <!-- tools box -->
                                <div class="pull-right box-tools">
                                    <button class="btn btn-default btn-sm" data-toggle="tooltip" data-widget="collapse"
                                            title="Collapse" type="button">
                                        <i class="fa fa-minus">
                                        </i>
                                    </button>
                                </div>
                                <!-- /. tools -->
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body pad">
                                <!--  <form> -->
                                <textarea class="textarea" placeholder="Pon un texto aquí" id="descripcion_publicacion" name="descripcion_publicacion"
                                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                </textarea>
                                <!--  </form> -->
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
                </div>
            </div>
        </div>
    </form>
@endsection

@section('jsextra')
    <script src="{{ asset('js/publicacion.js')}}"></script>
@endsection