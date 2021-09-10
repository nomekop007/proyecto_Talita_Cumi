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
                <p class="barra_plomo text-center">
                    Crear Evento en el sitio web
                </p><br>
                <div class="form row">
                    <div class="form-group col-md-6">
                        <label for="titulo_evento">
                            Titulo evento
                        </label>
                        <input class="form-control" id="titulo_evento" maxlength="30" name="titulo_evento"
                               placeholder="ingrese un titulo" type="text">
                        </input>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="fecha_evento">
                            Fecha del evento
                        </label>

                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-clock-o">
                                </i>
                            </div>
                            <input class="form-control pull-right" id="fecha_evento" name="fecha_evento" type="text" placeholder="ingrese fecha">
                            </input>
                        </div>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="ubicacion_evento">
                            Ubicacion del evento
                        </label>
                        <input class="form-control" id="ubicacion_evento" maxlength="30" name="ubicacion_evento"
                               placeholder="ingrese ubicacion" type="text">
                        </input>
                    </div>


                    <div class="form-group col-md-6">
                        <label for="URLevento">
                            Insertar foto de referencia
                        </label>
                        <input accept="image/*" id="URLevento" name="URLevento" type="file">

                    </div>
                    <div class="form-group col-md-12">


                        <div class="box box-primary">
                            <div class="box-header">
                                <h3 class="box-title">Descripcion
                                    <small>CK Editor</small>
                                </h3>
                                <!-- tools box -->
                                <div class="pull-right box-tools">
                                    <button type="button" class="btn btn-primary btn-sm" data-widget="collapse" data-toggle="tooltip"
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
                        <br>
                        <code>
                            <div class="progress progress-sm active">
                                <div class="progress-bar progress-bar-light-blue progress-bar-striped bar"  role="progressbar"
                                     aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                    <span class="sr-only">20% Complete</span>
                                </div>
                            </div>
                        </code>
                        <div class="overlay text-center btn" id="subiendo">
                            <i class="fa fa-refresh fa-spin fa-2x"> </i>
                            <h3>Subiendo Archivo...</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

@section('jsextra')
    <script src="{{ asset('js/js_admin/evento.js')}}">
    </script>

    <!--editor de texto avanzado -->
    <script>
     $(function () {
            CKEDITOR.replace('descripcion_evento');
    })
    </script>
    <!-- bootstrap datepicker -->
    <script src="{{ asset('adminLTE_admin/bower_components/moment/min/moment.min.js')}}"></script>
    <script src="{{ asset('bootstrap-datetimepicker-master/js/bootstrap-datetimepicker.js')}}"></script>


@endsection
