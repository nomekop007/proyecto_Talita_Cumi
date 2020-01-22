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
                <p class="barra_plomo text-center">
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

                    <div class="form-group col-md-2 seleccionar">
                        <label for="Categoria">

                        </label>
                        <button class="btn btn-primary  form-control"
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
                        <select class="form-control combo" id="tipo_publicacion" name="tipo_publicacion" onchange="opcion()">
                            <!--se carga abajo en el script -->
                        </select>
                    </div>
                    <div class="form-group col-md-6 URLmedia" hidden>
                        <label for="URLpublicacion">
                            Insertar foto
                        </label>
                        <input id="URLpublicacion" name="URLpublicacion" type="file" accept="image/*">
                    </div>


                    <div class="form-group col-md-12 descripcion">
                        <!--se carga abajo en el script -->
                    </div>


                    <br>
                    <div class="form-group col-md-12 enviar" hidden>
                        <button class="btn btn-primary"
                                id="btnEnviar"
                                type="submit">
                            Crear Publicacion
                        </button>
                        <br>
                        <code>
                            <div class="progress progress-sm active">
                                <div class="progress-bar progress-bar-light-blue progress-bar-striped bar"
                                     role="progressbar"
                                     aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                    <span class="sr-only">0% Complete</span>
                                </div>
                            </div>
                        </code>
                        <div class="overlay text-center btn" id="subiendo">
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
    <script>
        $('.tipo').hide();
        $('.URLmedia').hide();
        $('.titulo').hide();
        $('.descripcion').hide();
        $('.enviar').hide();

        //cargar combobox tipo
        var html = '  <option value="1" id="v-foto">' +
            '                               Foto' +
            '                            </option>' +
            '         <option value="2" id="v-video">' +
            '                               Video' +
            '                            </option>';
        $('.combo').html(html);


        //cargar CK Editor descripcion
        var html2 = '      <div class="box box-primary">\n' +
            '                            <div class="box-header ">\n' +
            '                                <h3 class="box-title ">Descripcion\n' +
            '                                    <small>CK Editor</small>\n' +
            '                                </h3>\n' +
            '                                <!-- tools box -->\n' +
            '                                <div class="pull-right box-tools ">\n' +
            '                                    <button type="button" class="btn btn-primary btn-sm" data-widget="collapse"\n' +
            '                                            data-toggle="tooltip"\n' +
            '                                            title="Collapse">\n' +
            '                                        <i class="fa fa-minus"></i></button>\n' +
            '                                </div>\n' +
            '                                <!-- /. tools -->\n' +
            '                            </div>\n' +
            '                            <!-- /.box-header -->\n' +
            '                            <div class="box-body pad">\n' +
            '                                 <textarea id="descripcion_publicacion" name="descripcion_publicacion"\n' +
            '                                           placeholder="ingrese texto aqui" rows="10" cols="80">\n' +
            '                                </textarea>\n' +
            '                            </div>\n' +
            '                        </div>\n';
        $('.descripcion').html(html2);


        //funcion para cambiar si se inserta una foto o un video
        function opcion() {
            var a = $("#tipo_publicacion option:selected").val();
            if (a == 1) {
                var html = '         <label for="URLpublicacion">' +
                    '                            Insertar foto ' +
                    '                        </label>\n' +
                    '                        <input id="URLpublicacion" name="URLpublicacion" type="file" accept="image/*" >';
            } else {
                var html = '         <label for="URLpublicacion">' +
                    '                            Insertar video' +
                    '                        </label>\n' +
                    '                        <input id="URLpublicacion" name="URLpublicacion" type="file" accept="video/mp4" >';
            }
            $('.URLmedia').html(html);
        }


    </script>
    <script src="{{ asset('js/js_admin/publicacion.js')}}"></script>

    <script>
        $(function () {
            CKEDITOR.replace('descripcion_publicacion')
        })
    </script>
@endsection