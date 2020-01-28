$(document).ready(function () {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#subiendo').hide();

//Date range picker with time picker
    $('#fecha_evento').datepicker({
          autoclose: true
    });

    //valida los campos y guarda en base de datos
    $('#btnEnviar').click(function (event) {
        event.preventDefault();
        validarCampos();
    });

    //validar y guardar en bd
    function validarCampos() {


        var paqueteDeDatos = new FormData();
        //rescatar los valores de los input y guardarlas en un formData
        paqueteDeDatos.append('URLevento', $('#URLevento')[0].files[0]);
        paqueteDeDatos.append('titulo_evento', $('#titulo_evento').prop('value'));
        paqueteDeDatos.append('descripcion_evento', CKEDITOR.instances['descripcion_evento'].getData());
        
            //reparar fecha de evento
        paqueteDeDatos.append('fecha',  $('#fecha_evento').val() );
        paqueteDeDatos.append('ubicacion', $('#ubicacion_evento').val());


        //octener valor input por sus id
        var titulo_evento = $('#titulo_evento').val();
        var url = $('#URLevento').val();
        var descripcion_evento = CKEDITOR.instances['descripcion_evento'].getData();
        var fecha_evento = $('#fecha_evento').val();
        var ubicacion_evento = $('#ubicacion_evento').val();

        console.log(fecha_evento);

        if (titulo_evento.length == 0 || url.length == 0 || descripcion_evento.length == 0 || fecha_evento.length == 0 || ubicacion_evento.length == 0 ) {

            swal('Campos Vacios', 'faltan datos ', 'error');

        } else {

            //recacar url del boton
            var url = $('#formulario').attr('action');
            $('#subiendo').show();
            $('#btnEnviar').attr("disabled", true);
            $.ajax({
                type: "POST",
                url: url,
                data: paqueteDeDatos,
                processData: false,
                contentType: false,
                success: function (datos) {
                    console.log(datos);
                    if (datos == "ok") {
                        $('.bar').width('100%');
                        setTimeout(function () {
                            window.location = window.location;
                        }, 1500);
                        swal('Evento Registrado', 'guardado en base de datos!', 'success')
                    } else {
                        swal('algo paso', 'faltan datos ', 'error')
                    }
                    $('#btnEnviar').attr("disabled", false);
                    $('#subiendo').hide();
                },
                error: function (error) {
                    console.log(error);
                    swal('algo paso!', 'Pongase en contacto con soporte tecnico ', 'error')
                    $('#btnEnviar').attr("disabled", false);
                    $('#subiendo').hide();
                }
            });


        }


    }


//modal imagen
    $('.btn-img').click(function (event) {
        event.preventDefault();
        var url = $(this).data('url');

        var html = '<div class="imagen">' +
            '<img width="500px" src="' + url + '">' +
            '</div>';

        $('.contenido').html(html);
    });

    //modal descripcion
    $('.btn-descripcion').click(function (event) {
        event.preventDefault();
        var url = $(this).data('url');
        var titulo = $(this).data('title')

        $('#mimodalLabel_des').html(titulo);

        $('.b_des').html(url);


        $('#modal_des').modal('show');
    });


    //modal eliminar evento
    $('.btn-delete').click(function (event) {
        event.preventDefault();
        var id = $('#edi').prop('value');
        var url = $(this).data('url');
        $.ajax({
            type: "POST",
            url: url,
            data: {
                id: id
            },
            success: function (datos) { //remplazando los datos del modal con los de la base de datos
                $('#mimodalLabel_eliminar').html(datos['tituloEvento']);

                $('#eli').val(datos['id'])
                var html = ' ¿esta seguro de eliminar esto?' +
                    '<input id="eli" name="idModalEliminarPallet" type="hidden" value="' + id + '">';
                $('.b_eliminar').html(html);
            },
            error: function (error) {
                console.log(error);
                swal('algo paso!', 'Pongase en contacto con soporte tecnico ', 'error')
            }
        });
        $('#modal_editar').modal('hide');
        $('#modal_eliminar').modal('show');
    });


    //eliminar evento
    $('#eliminar').click(function (event) {
        event.preventDefault();

        var id = $('#eli').val();
        var url = $(this).data('url');

        $.ajax({
            type: "POST",
            url: url,
            data: {
                id: id
            },
            success: function (datos) {
                if (datos != "error") {
                    var id = datos;
                    console.log(id)
                    $('.TablaEvento' + id).remove();
                    Swal({
                        type: 'error',
                        title: 'Evento Eliminado'
                    })
                } else {
                    swal('algo paso', 'hubo un error ', 'error')
                }
            },
            error: function (error) {
                console.log(error);
                swal('algo paso!', 'Pongase en contacto con soporte tecnico ', 'error')
            }
        });
    });


    //modal editar evento

    $('.btn-edit').click(function (event) {
        event.preventDefault();
        var id = $(this).data('id');
        var url = $(this).data('url');

        $.ajax({
            type: "POST",
            url: url,
            data: {
                id: id
            },
            success: function (datos) { //remplazando los datos del modal con los de la base de datos
                $('#mimodalLabel_editar').html(datos['tituloEvento']);

                //completar formulario
                var html = '     <div class="form-row">\n' +
                    '            <div class="form-group col-md-12">\n' +
                    '                <div class="form row">\n' +
                    '<input id="edi" name="idModalEditarEvento" type="hidden" value="' + id + '">' +
                    '                    <div class="form-group col-md-3">\n' +
                    '                        <label for="titulo_eventoX">\n' +
                    '                            Titulo evento\n' +
                    '                        </label>\n' +
                    '                        <input class="form-control" id="titulo_eventoX" maxlength="30" name="titulo_eventoX"\n' +
                    '                               placeholder="ingrese un titulo" type="text"  value="' + datos['tituloEvento'] + '">\n' +
                    '                        </input>\n' +
                    '                    </div>\n' +
                    '                    <div class="form-group col-md-4">\n' +
                    '                        <label for="fecha_eventoX">\n' +
                    '                            Fecha evento\n' +
                    '                        </label>\n' +
                    '                        <div class="input-group">\n' +
                    '                            <div class="input-group-addon">\n' +
                    '                                <i class="fa fa-clock-o">\n' +
                    '                                </i>\n' +
                    '                            </div>\n' +
                    '                            <input class="form-control pull-right" id="fecha_eventoX" name="fecha_eventoX" type="text">\n' +
                    '                            </input>\n' +
                    '                        </div>\n' +
                    '                    </div>\n' +
                    '                    <div class="form-group col-md-5">\n' +
                    '                        <label for="URLeventoX">\n' +
                    '                            Actualizar foto(Opcional)\n' +
                    '                        </label>\n' +
                    '                        <input accept="image/*" id="URLeventoX" name="URLeventoX" type="file">\n' +
                    '\n' +
                    '                    </div>\n' +
                    '                    <div class="form-group col-md-12">\n' +
                    '\n' +
                    '\n' +
                    '                        <div class="box box-primary">\n' +
                    '                            <div class="box-header">\n' +
                    '                                <h3 class="box-title">Descripcion\n' +
                    '                                    <small>CK Editor</small>\n' +
                    '                                </h3>\n' +
                    '                            </div>\n' +
                    '                            <!-- /.box-header -->\n' +
                    '                            <div class="box-body pad">\n' +
                    '                    <textarea id="descripcion_eventoX" name="descripcion_eventoX" placeholder="ingrese texto aqui" rows="10" cols="80">\n' +
                    '                                ' +
                    datos['descripcionEvento']
                    + '\n' +
                    '                    </textarea>\n' +
                    '                            </div>\n' +
                    '                        </div>\n' +
                    '\n' +
                    '                    </div>\n' +
                    '                </div>\n' +
                    '            </div>\n' +
                    '        </div>';
                $('.b_editar').html(html);


                // editText descripcion
                $(function () {
                    CKEDITOR.replace('descripcion_eventoX')
                });

                //configuracion inial datarangepicker
                $('#fecha_eventoX').daterangepicker({
                    timePicker: true, timePickerIncrement: 30,
                    locale: {
                        format: 'YYYY/MM/DD hh:mm',
                        daysOfWeek: ['Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sa', 'Do'],
                        monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre']
                    },
                    "startDate": datos['fechaInicio'],
                    "endDate": datos['fechaFin'],
                    "autoApply": true
                });

            },
            error: function (error) {
                console.log(error);
                swal('algo paso!', 'Pongase en contacto con soporte tecnico ', 'error')
            }

        });
        $('#modal_editar').modal('show');
    });


    //editar evento
    $('#editar').click(function (event) {
        event.preventDefault();

        var titulo = $('#titulo_eventoX').val();
        var descripcion = CKEDITOR.instances['descripcion_eventoX'].getData();

        if (descripcion.length == 0 || titulo.length == 0) {

            swal('algo paso', 'faltaron datos que completar ', 'error')

        } else {

            var paqueteDeDatos = new FormData();
            //rescatar los valores de los input y guardarlas en un formData
            paqueteDeDatos.append('id', $('#edi').prop('value'));
            paqueteDeDatos.append('titulo_evento', $('#titulo_eventoX').prop('value'));
            paqueteDeDatos.append('descripcion_evento', CKEDITOR.instances['descripcion_eventoX'].getData());

            var fecha_evento = $('#fecha_eventoX').val();
            var dates = fecha_evento.split(" - ");
            paqueteDeDatos.append('fechaInicio', dates[0]);
            paqueteDeDatos.append('fechaFin', dates[1]);


            var file = $('#URLeventoX').val();
            if (file == "") {
                paqueteDeDatos.append('URLevento', 'x');

            } else {
                paqueteDeDatos.append('URLevento', $('#URLeventoX')[0].files[0]);
            }

            var url = $(this).data('url');

            $('#subiendo').show();
            $('#editar').attr("disabled", true);
            $('.btn-delete').attr("disabled", true);
            $('.btn-default').attr("disabled", true);
            $.ajax({
                type: "POST",
                url: url,
                data: paqueteDeDatos,
                processData: false,
                contentType: false,
                success: function (datos) {
                    if (datos == "ok") {
                        setTimeout(function () {
                            window.location = window.location;
                        }, 900);
                        swal('Evento Actualizada', 'guardado en base de datos!', 'success')
                        $('#subiendo').hide();
                    } else {
                        swal('algo paso', 'faltan datos ', 'error')
                    }
                },
                error: function (error) {
                    console.log(error);
                    swal('algo paso!', 'Pongase en contacto con soporte tecnico ', 'error')
                    $('#editar').attr("disabled", false);
                    $('.btn-delete').attr("disabled", false);
                    $('.btn-default').attr("disabled", false);
                    $('#subiendo').hide();
                }
            });

        }

    });


    //publicar evento
    $('.btn-public').click(function (event) {
        event.preventDefault();
        var id = $(this).data('id');
        var url = $(this).data('url');
        console.log(id)
        Swal.fire({
            title: 'Esta Seguro?',
            text: "Esta apunto de publicar este evento en el sitio",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, Publicar!'
        }).then((result) => {
            if (result.value) {

                $.ajax({
                    type: "POST",
                    url: url,
                    data: {
                        id: id
                    },
                    success: function (datos) {
                        if (datos != "error") {
                            estado(datos);

                            Swal.fire(
                                'Publicado!',
                                'su evento ahora se puede ver en el sitio',
                                'success'
                            )
                        } else {
                            swal('algo paso', 'hubo un error ', 'error')
                        }
                    },
                    error: function (error) {
                        console.log(error);
                        swal('algo paso!', 'Pongase en contacto con soporte tecnico ', 'error')
                    }
                });

            }
        });
    });


    //ocultar evento
    $('.btn-ocultar').click(function (event) {
        event.preventDefault();
        var id = $(this).data('id');
        var url = $(this).data('url');

        console.log(id)
        Swal.fire({
            title: 'Esta Seguro?',
            text: "Esta apunto de ocultar esta publicacion del sitio",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, Ocultar!'
        }).then((result) => {
            if (result.value) {

                $.ajax({
                    type: "POST",
                    url: url,
                    data: {
                        id: id
                    },
                    success: function (datos) {
                        if (datos != "error") {
                            estado(datos);

                            Swal.fire(
                                'Ocultado!',
                                'su evento ahora no se muestra en el sitio',
                                'success'
                            )
                        } else {
                            swal('algo paso', 'hubo un error ', 'error')
                        }
                    },
                    error: function (error) {
                        console.log(error);
                        swal('algo paso!', 'Pongase en contacto con soporte tecnico ', 'error')
                    }
                });

            }
        });
    });


    function estado(datos) {

        var html = "";
        if (datos['estado'] == 'activo') {
            html = "<button class='btn btn-warning  disabled'>\n" +
                "      <i class='fab fa-creative-commons-pd'></i>Ocultar\n" +
                "   </button>";
        } else {

            html = " <button class='btn btn-success  disabled'>\n" +
                "      <i class='fas fa-upload'></i>Publicar\n" +
                "    </button>";
        }
        $('.evento' + datos['id']).replaceWith(html);


    }

});