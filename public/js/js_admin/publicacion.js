$(document).ready(function () {

    $('#subiendo').hide();

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });



    //selecionar pagina inicio
    $('#btnSeleccionar1').click(function (event) {
        event.preventDefault();
        $('.titulo_seleccion').html('agregar publicacion en Pagina inicio');
        var c = $('#btnSeleccionar1').val();
        console.log(c)
        $('#Categoria').val(c);

        if (c != 1) {
            $('.descripcion').show();
            $('.titulo').show();
        }

    
        $('.URLmedia').show();
        $('.enviar').show();




        $('.galeria').hide();
        $('.tienda').hide();
        $('.inicio').hide();
    });

 //selecionar galeria
    $('#btnSeleccionar2').click(function (event) {
        event.preventDefault();
        $('.titulo_seleccion').html('agregar multimedia en galeria');
        var c = $('#btnSeleccionar2').val();
        console.log(c)
      $('#Categoria').val(c);
        if (c != 1) {
            $('.descripcion').show();
            $('.titulo').show();
        }

        $('.tipo').show();
        $('.URLmedia').show();
        $('.enviar').show();

        $('.galeria').hide();
        $('.tienda').hide();
        $('.inicio').hide();
    });

 //selecionar tienda
    $('#btnSeleccionar3').click(function (event) {
        event.preventDefault();
         $('.titulo_seleccion').html('agregar producto en Tienda Online');
        var c = $('#btnSeleccionar3').val();
        console.log(c)

       $('#Categoria').val(c);

        if (c != 1) {
            $('.descripcion').show();
            $('.titulo').show();
        }

       
        $('.URLmedia').show();
        $('.precio').show();

        $('.enviar').show();

        $('.galeria').hide();
        $('.tienda').hide();
        $('.inicio').hide();
    });



    //valida los campos y guarda en base de datos
    $('#btnEnviar').click(function (event) {
        event.preventDefault();
        validarCampos();
    });


    //validar y guardar en bd
    function validarCampos() {

        //recacar url del boton
        var url = $('#formulario').attr('action');
        var opcion = $('#Categoria').val();


        var paqueteDeDatos = new FormData();
        //rescatar los valores de los input y guardarlas en un formData
        paqueteDeDatos.append('Categoria', $('#Categoria').prop('value'));
        paqueteDeDatos.append('URLpublicacion', $('#URLpublicacion')[0].files[0]);
        paqueteDeDatos.append('tipo_publicacion', $('#tipo_publicacion').prop('value'));


        //pregunta si se eligio pagina inicio
        if (opcion == 2) {
            paqueteDeDatos.append('titulo_publicacion', $('#titulo_publicacion').prop('value'));
            paqueteDeDatos.append('descripcion_publicacion', CKEDITOR.instances['descripcion_publicacion'].getData());
            //octener valor input por sus id
            var titulo_publicacion = $('#titulo_publicacion').val();
            var URLpublicacion = $('#URLpublicacion').val();
            var descripcion_publicacion = CKEDITOR.instances['descripcion_publicacion'].getData();
            if (titulo_publicacion.length == 0 || URLpublicacion.length == 0 || descripcion_publicacion.length == 0) {
                swal('Campos Vacios', 'faltan datos ', 'error')
            } else {
                var archivo = $('#URLpublicacion')[0].files[0].size;
                if (archivo > 108000000) {
                    swal('archivo muy grande', 'el archivo no debe superar los 100MB', 'error')
                } else {
                    guardarPublicacion(url,paqueteDeDatos);
                }
            }


        //pregunta si se eligio galeria
        } else if(opcion == 1){
            var URLpublicacion = $('#URLpublicacion').val();
            if (URLpublicacion.length == 0) {
                swal('Campos Vacios', 'falta seleccionar archivo ', 'error')
            } else {
                var archivo = $('#URLpublicacion')[0].files[0].size;
                if (archivo > 108000000) {
                    swal('archivo muy grande', 'el archivo no debe superar los 100MB', 'error')
                } else {
                  guardarPublicacion(url,paqueteDeDatos);
                }
            }


        //pregunta si se eligio tienda online
        }else{
            paqueteDeDatos.append('titulo_publicacion', $('#titulo_publicacion').prop('value'));
            paqueteDeDatos.append('descripcion_publicacion', CKEDITOR.instances['descripcion_publicacion'].getData());
            paqueteDeDatos.append('precio', $('#precio').prop('value'));
            //octener valor input por sus id
            var titulo_publicacion = $('#titulo_publicacion').val();
            var URLpublicacion = $('#URLpublicacion').val();
            var precio = $('#precio').val();
            var descripcion_publicacion = CKEDITOR.instances['descripcion_publicacion'].getData();
            if (titulo_publicacion.length == 0 || URLpublicacion.length == 0 || descripcion_publicacion.length == 0 || precio.length == 0) {
                swal('Campos Vacios', 'faltan datos ', 'error')
            } else {
                var archivo = $('#URLpublicacion')[0].files[0].size;
                if (archivo > 108000000) {
                    swal('archivo muy grande', 'el archivo no debe superar los 100MB', 'error')
                } else {
                    guardarPublicacion(url,paqueteDeDatos);
                }
            }
        }



    }



    function guardarPublicacion(url,paquete){

        $('#subiendo').show();
        $('#btnEnviar').attr("disabled", true);
        $.ajax({
            type: "POST",
            url: url,
            data: paquete,
            processData: false,
            contentType: false,
            success: function (datos) {
                console.log(datos);
                if (datos == "ok") {
                    $('.bar').width('100%');
                    setTimeout(function () {
                        window.location = window.location;
                    }, 1500);

                    swal('Publicacion Registrada', 'guardado en base de datos!', 'success')
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






    //modal imagen
    $('.btn-img').click(function (event) {
        event.preventDefault();
        var url = $(this).data('url');

        var html = '<div class="imagen">' +
            '<img width="500px" src="' + url + '">' +
            '</div>';

        $('.contenido').html(html);
    });

    //modal video
    $('.btn-video').click(function (event) {
        event.preventDefault();
        var url = $(this).data('url');

        var html = '<div class="video">' +
            '<video controls width=760>' +
            '<source src="' + url + '" type="video/mp4">' +
            '</video>' +
            '</div>'

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


    //modal eliminar publicacion
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
                if (datos['categoria'] != 1) {
                    $('#mimodalLabel_eliminar').html(datos['tituloPublicacion']);
                } else {
                    $('#mimodalLabel_eliminar').html('Media N°' + datos['id'] + ' de la galeria de imagenes');
                }


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

    //eliminar publicacion
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

                    $('.TablaPublicacion' + id).remove();
                    Swal({
                        type: 'error',
                        title: 'Publicacion eliminada'
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


    //modal editar Publicacion

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
               

                if (datos['categoria'] == 2) {
                    $('#mimodalLabel_editar').html(datos['tituloPublicacion']);

                    var c = datos['categoria'];
                    var i = 0;
                    var x = 0;

                    if (c == 2) {
                        a1 = 'Pagina de Inicio';
                        a2 = 'Tienda Online';

                        i = 2;
                        x = 3;
                    } else {
                        a1 = 'Tienda Online';
                        a2 = 'Pagina de Inicio';
                        i = 3;
                        x = 2;
                    }


                    //completar formulario
                    var html = '<div class="form-row">\n' +
                        '            <div class="form-group col-md-12">\n' +
                        '                <div class="form row">\n' +
                        '<input id="edi" name="idModalEditarPublicacion" type="hidden" value="' + id + '">' +
                        '<input id="cat" name="idModalEditarPublicacion2" type="hidden" value="' + datos['categoria'] + '">' +
                        '\n' +
                        '                    <div class="form-group col-md-6">\n' +
                        '                        <label for="titulo_publicacionX">\n' +
                        '                            Titulo Publicacion\n' +
                        '                        </label>\n' +
                        '                        <input class="form-control" id="titulo_publicacionX" maxlength="40" name="titulo_publicacionX"\n' +
                        '                               placeholder="ingrese un titulo" type="text" value="' + datos['tituloPublicacion'] + '">\n' +
                        '                    </div>\n' +
                        '                    <div class="form-group col-md-6" hidden>\n' +
                        '                        <label for="tipo_publicacionX">\n' +
                        '                            Tipo Publicacion\n' +
                        '                        </label>\n' +
                        '                        <br>\n' +
                        '                        <select class="form-control" id="tipo_publicacionX" name="tipo_publicacionX" onchange="opcionX()">\n' +
                        '                            <option value="1" class="v-fotoX">\n' +
                        '                               Foto\n' +
                        '                            </option>\n' +
                        '                            <option value="2" class="v-videoX">\n' +
                        '                               Video\n' +
                        '                            </option>\n' +
                        '                        </select>\n' +
                        '                        </br>\n' +
                        '                    </div>\n' +
                        '                    <div class="form-group col-md-6" hidden>\n' +
                        '                        <label for="CategoriaX">\n' +
                        '                            Ubicacion de la Publicacion\n' +
                        '                        </label>\n' +
                        '                        <br>\n' +
                        '                        <select class="form-control" id="CategoriaX" name="CategoriaX">\n' +
                        '                            <option value="' + i + '">\n' +
                        '                                ' +
                        a1
                        + '\n' +
                        '                            </option>\n' +
                        '                            <option value="' + x + '">\n' +
                        '                                ' +
                        a2
                        + '\n' +
                        '                            </option>\n' +
                        '                        </select>\n' +
                        '                        </br>\n' +
                        '                    </div>\n' +
                        '                    <div class="form-group col-md-6 URLmediaX">\n' +
                        '                        <label for="URLpublicacionX">\n' +
                        '                            Actualizar foto (opcional)\n' +
                        '                        </label>\n' +
                        '                        <input id="URLpublicacionX" name="URLpublicacionX" type="file" accept="image/*"   >\n' +
                        '                    </div>\n' +
                        '                    <div class="form-group col-md-12">\n' +
                        '\n' +
                        '                        <div class="box box-primary">\n' +
                        '                            <div class="box-header">\n' +
                        '                                <h3 class="box-title">Descripcion\n' +
                        '                                    <small>CK Editor</small>\n' +
                        '                                </h3>\n' +
                        '                            </div>\n' +
                        '                            <!-- /.box-header -->\n' +
                        '                            <div class="box-body pad">\n' +
                        '                    <textarea id="descripcion_publicacionX" name="descripcion_publicacionX" placeholder="ingrese texto aqui" rows="10" cols="80">\n' +
                        '                                ' +
                        datos['descripcionPublicacion']
                        + '\n' +
                        '                    </textarea>\n' +
                        '                            </div>\n' +
                        '                        </div>\n' +
                        '                    </div>\n' +
                        '                </div>\n' +
                        '            </div>\n' +
                        '        </div>';


                    $('.b_editar').html(html);


                    $(function () {
                        CKEDITOR.replace('descripcion_publicacionX')
                    });


                } else if(datos['categoria'] == 1) {

                    $('#mimodalLabel_editar').html('Media N°' + datos['id'] + ' de la galeria de imagenes');
                    //completar formulario
                    var html = '<div class="form-row">\n' +
                        '            <div class="form-group col-md-12">\n' +
                        '                <div class="form row">\n' +
                        '<input id="edi" name="idModalEditarPublicacion" type="hidden" value="' + id + '">' +
                        '<input id="cat" name="idModalEditarPublicacion2" type="hidden" value="' + datos['categoria'] + '">' +
                        '\n' +

                        '                    <div class="form-group col-md-6">\n' +
                        '                        <label for="tipo_publicacionX">\n' +
                        '                            Tipo Publicacion\n' +
                        '                        </label>\n' +
                        '                        <br>\n' +
                        '                        <select class="form-control" id="tipo_publicacionX" name="tipo_publicacionX" onchange="opcionX()">\n' +
                        '                            <option value="1" class="v-fotoX">\n' +
                        '                               Foto\n' +
                        '                            </option>\n' +
                        '                            <option value="2" class="v-videoX">\n' +
                        '                               Video\n' +
                        '                            </option>\n' +
                        '                        </select>\n' +
                        '                        </br>\n' +
                        '                    </div>\n' +

                        '                    <div class="form-group col-md-6 URLmediaX">\n' +
                        '                        <label for="URLpublicacionX">\n' +
                        '                            Actualizar foto (opcional)\n' +
                        '                        </label>\n' +
                        '                        <input id="URLpublicacionX" name="URLpublicacionX" type="file" accept="image/*"   >\n' +
                        '                    </div>\n' +
                        '                </div>\n' +
                        '            </div>\n' +
                        '        </div>';

                    $('.b_editar').html(html);




                }else {


   $('#mimodalLabel_editar').html(datos['tituloPublicacion']);

                    var c = datos['categoria'];
                    var i = 0;
                    var x = 0;

                    if (c == 2) {
                        a1 = 'Pagina de Inicio';
                        a2 = 'Tienda Online';

                        i = 2;
                        x = 3;
                    } else {
                        a1 = 'Tienda Online';
                        a2 = 'Pagina de Inicio';
                        i = 3;
                        x = 2;
                    }


                    //completar formulario
                    var html = '<div class="form-row">\n' +
                        '            <div class="form-group col-md-12">\n' +
                        '                <div class="form row">\n' +
                        '<input id="edi" name="idModalEditarPublicacion" type="hidden" value="' + id + '">' +
                        '<input id="cat" name="idModalEditarPublicacion2" type="hidden" value="' + datos['categoria'] + '">' +
                        '\n' +
                        '                    <div class="form-group col-md-6">\n' +
                        '                        <label for="titulo_publicacionX">\n' +
                        '                            Titulo Producto\n' +
                        '                        </label>\n' +
                        '                        <input class="form-control" id="titulo_publicacionX" maxlength="40" name="titulo_publicacionX"\n' +
                        '                               placeholder="ingrese un titulo" type="text" value="' + datos['tituloPublicacion'] + '">\n' +
                        '                    </div>\n' +
                        '                    <div class="form-group col-md-6" hidden>\n' +
                        '                        <label for="tipo_publicacionX">\n' +
                        '                            Tipo Publicacion\n' +
                        '                        </label>\n' +
                        '                        <br>\n' +
                        '                        <select class="form-control" id="tipo_publicacionX" name="tipo_publicacionX" onchange="opcionX()">\n' +
                        '                            <option value="1" class="v-fotoX">\n' +
                        '                               Foto\n' +
                        '                            </option>\n' +
                        '                            <option value="2" class="v-videoX">\n' +
                        '                               Video\n' +
                        '                            </option>\n' +
                        '                        </select>\n' +
                        '                        </br>\n' +
                        '                    </div>\n' +
                        '                    <div class="form-group col-md-6" hidden>\n' +
                        '                        <label for="CategoriaX">\n' +
                        '                            Ubicacion de la Publicacion\n' +
                        '                        </label>\n' +
                        '                        <br>\n' +
                        '                        <select class="form-control" id="CategoriaX" name="CategoriaX">\n' +
                        '                            <option value="' + i + '">\n' +
                        '                                ' +
                        a1
                        + '\n' +
                        '                            </option>\n' +
                        '                            <option value="' + x + '">\n' +
                        '                                ' +
                        a2
                        + '\n' +
                        '                            </option>\n' +
                        '                        </select>\n' +
                        '                        </br>\n' +
                        '                    </div>\n' +
                        '<div class="form-group col-md-6 precio">\n' +
                        '<label for="precioX">\n'+
                        '  precio producto(corregir validacion)\n'+
                        '</label>\n'+
                        '<input class="form-control" id="precioX" name="precioX" type="number" placeholder="ingrese precio producto" value="' + datos['precio'] + '">\n'+
                        '</div>\n'+
                        '                    <div class="form-group col-md-6 URLmediaX">\n' +
                        '                        <label for="URLpublicacionX">\n' +
                        '                            Actualizar foto (opcional)\n' +
                        '                        </label>\n' +
                        '                        <input id="URLpublicacionX" name="URLpublicacionX" type="file" accept="image/*"   >\n' +
                        '                    </div>\n' +
                        '                    <div class="form-group col-md-12">\n' +
                        '\n' +
                        '                        <div class="box box-primary">\n' +
                        '                            <div class="box-header">\n' +
                        '                                <h3 class="box-title">Descripcion\n' +
                        '                                    <small>CK Editor</small>\n' +
                        '                                </h3>\n' +
                        '                            </div>\n' +
                        '                            <!-- /.box-header -->\n' +
                        '                            <div class="box-body pad">\n' +
                        '                    <textarea id="descripcion_publicacionX" name="descripcion_publicacionX" placeholder="ingrese texto aqui" rows="10" cols="80">\n' +
                        '                                ' +
                        datos['descripcionPublicacion']
                        + '\n' +
                        '                    </textarea>\n' +
                        '                            </div>\n' +
                        '                        </div>\n' +
                        '                    </div>\n' +
                        '                </div>\n' +
                        '            </div>\n' +
                        '        </div>';


                    $('.b_editar').html(html);


                    $(function () {
                        CKEDITOR.replace('descripcion_publicacionX')
                    });




                }
            },
            error: function (error) {
                console.log(error);
                swal('algo paso!', 'Pongase en contacto con soporte tecnico ', 'error')
            }

        });
        $('#modal_editar').modal('show');


    });



    //editar Publicacion
    $('#editar').click(function (event) {
        event.preventDefault();
        var t = $('#cat').prop('value'); //categoria de la publicacion
        var url = $(this).data('url');

        if (t == 1) {

            var file = $('#URLpublicacionX').val();
            if (file.length == 0) {
                swal('algo paso', 'por favor seleccione un archivo ', 'error')
            } else {

                var archivo = $('#URLpublicacionX')[0].files[0].size;


                if (archivo > 108000000) {
                    swal('archivo muy grande', 'el archivo no debe superar los 100MB', 'error')
                } else {
                    var paqueteDeDatos = new FormData();
                    paqueteDeDatos.append('id', $('#edi').prop('value'));
                    paqueteDeDatos.append('tipo_publicacion', $('#tipo_publicacionX').prop('value'));
                    paqueteDeDatos.append('URLpublicacion', $('#URLpublicacionX')[0].files[0]);
                    actualizar(url,paqueteDeDatos);
                }

            }




        } else if(t == 2){
            var titulo = $('#titulo_publicacionX').val();
            var descripcion = CKEDITOR.instances['descripcion_publicacionX'].getData();

            if (descripcion.length == 0 || titulo.length == 0) {

                swal('algo paso', 'faltaron datos que completar ', 'error')

            } else {

                var paqueteDeDatos = new FormData();
                //rescatar los valores de los input y guardarlas en un formData
                paqueteDeDatos.append('id', $('#edi').prop('value'));

                paqueteDeDatos.append('titulo_publicacion', $('#titulo_publicacionX').prop('value'));
                paqueteDeDatos.append('descripcion_publicacion', CKEDITOR.instances['descripcion_publicacionX'].getData());
                paqueteDeDatos.append('Categoria', $('#CategoriaX').prop('value'));
                paqueteDeDatos.append('tipo_publicacion', $('#tipo_publicacionX').prop('value'));

                var file = $('#URLpublicacionX').val();
                if (file == "") {
                    paqueteDeDatos.append('URLpublicacion', 'x');

                } else {
                    paqueteDeDatos.append('URLpublicacion', $('#URLpublicacionX')[0].files[0]);
                }

                actualizar(url,paqueteDeDatos);

            }
        }else{

            var titulo = $('#titulo_publicacionX').val();
            var descripcion = CKEDITOR.instances['descripcion_publicacionX'].getData();
            var precio = $('#precioX').val()
            if (descripcion.length == 0 || titulo.length == 0 || precio == 0) {

                swal('algo paso', 'faltaron datos que completar ', 'error')

            } else {

                var paqueteDeDatos = new FormData();
                //rescatar los valores de los input y guardarlas en un formData
                paqueteDeDatos.append('id', $('#edi').prop('value'));

                paqueteDeDatos.append('titulo_publicacion', $('#titulo_publicacionX').prop('value'));
                paqueteDeDatos.append('descripcion_publicacion', CKEDITOR.instances['descripcion_publicacionX'].getData());
                paqueteDeDatos.append('Categoria', $('#CategoriaX').prop('value'));
                paqueteDeDatos.append('tipo_publicacion', $('#tipo_publicacionX').prop('value'));
                paqueteDeDatos.append('precio', $('#precioX').prop('value'));
                var file = $('#URLpublicacionX').val();
                if (file == "") {
                    paqueteDeDatos.append('URLpublicacion', 'x');

                } else {
                    paqueteDeDatos.append('URLpublicacion', $('#URLpublicacionX')[0].files[0]);
                }

                actualizar(url,paqueteDeDatos);

            }

        }


    });



    function actualizar(url,paquete){

        $('#editar').attr("disabled", true);
        $('.btn-delete').attr("disabled", true);
        $('.btn-default').attr("disabled", true);
        $('#subiendo').show();
        $.ajax({
            type: "POST",
            url: url,
            data: paquete,
            processData: false,
            contentType: false,
            success: function (datos) {
                console.log(datos);
                if (datos == "ok") {
                    setTimeout(function () {
                        window.location = window.location;
                    }, 900);
                    swal('Publicacion Actualizada', 'guardado en base de datos!', 'success')
                    $('#subiendo').hide();
                } else {
                    swal('algo paso', 'faltan datos ', 'error')
                }
            },
            error: function (error) {
                console.log(error);
                swal('algo paso!', 'Pongase en contacto con soporte tecnico ', 'error')
                $('#subiendo').hide();
                $('#editar').attr("disabled", false);
                $('.btn-delete').attr("disabled", false);
                $('.btn-default').attr("disabled", false);
            }
        });
    }




    //publicar Publicacion
    $('.btn-public').click(function (event) {
        event.preventDefault();
        var id = $(this).data('id');
        var url = $(this).data('url');

        Swal.fire({
            title: 'Esta Seguro?',
            text: "Esta apunto de publicar esta publicacion en el sitio",
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
                                'su publicacion ahora se puede ver en el sitio',
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


    //ocultar Publicacion
    $('.btn-ocultar').click(function (event) {
        event.preventDefault();
        var id = $(this).data('id');
        var url = $(this).data('url');

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
                                'su publicacion ahora no se muestra en el sitio',
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
        $('.publicacion' + datos['id']).replaceWith(html);


    }


});