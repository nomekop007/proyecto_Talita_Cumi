@extends('home')

@section('ubicacion')
    <section class="content-header">
        <h1>
            Crear evento
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
                crear evento
            </li>
        </ol>
    </section>
@endsection


@section('contenido')
    <form id="formulario"
          method="POST"
          action="{{ route('crearEvento') }}"
          enctype="multipart/form-data">

        {{ csrf_field() }}
        <div class="form-row">
            <div class="form-group col-md-12">
                <p class="bg-info text-center">
                    Crear Evento en el sitio web
                </p><br>
                <div class="form row">
                    <div class="form-group col-md-3">
                        <label for="titulo_evento">
                            Titulo evento
                        </label>
                        <input class="form-control" id="titulo_evento" maxlength="30" name="titulo_evento"
                               placeholder="ingrese un titulo" type="text">
                        </input>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="fecha_evento">
                            Fecha evento
                        </label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-clock-o">
                                </i>
                            </div>
                            <input class="form-control pull-right" id="fecha_evento" name="fecha_evento" type="text">
                            </input>
                        </div>
                    </div>
                    <div class="form-group col-md-5">
                        <label for="URLevento">
                            Insertar foto
                        </label>
                        <input accept="image/*" id="URLevento" name="URLevento" type="file">

                    </div>
                    <div class="form-group col-md-12">


                        <div class="box box-info">
                            <div class="box-header">
                                <h3 class="box-title">Descripcion
                                    <small>CK Editor</small>
                                </h3>
                                <!-- tools box -->
                                <div class="pull-right box-tools">
                                    <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
                                            title="Collapse">
                                        <i class="fa fa-minus"></i></button>
                                </div>
                                <!-- /. tools -->
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body pad">
                    <textarea id="descripcion_evento" name="descripcion_evento" placeholder="ingrese texto aqui" rows="10" cols="80">
                    </textarea>
                            </div>
                        </div>

                    </div>
                    <div class="form-group col-md-12">
                        <button class="btn btn-primary btn-sm" id="btnEnviar" type="submit">
                            Crear Evento
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

@section('jsextra')
    <script src="{{ asset('js/js_admin/evento.js')}}">
    </script>
    <script>
        $(function () {
            CKEDITOR.replace('descripcion_evento')
        })
    </script>
@endsection
