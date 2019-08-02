$(document).ready(function () {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });




    //traduccion del dataTable
    $('.mi-dataTable').DataTable({
        "language": {
            "sProcessing": "Procesando...",
            "sLengthMenu": "Mostrar _MENU_ registros",
            "sZeroRecords": "No se encontraron resultados",
            "sEmptyTable": "Ningún dato disponible en esta tabla",
            "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix": "",
            "sSearch": "Buscar:",
            "sUrl": "",
            "sInfoThousands": ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "Último",
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
        }
    });


    //cargar combobox tipo
    var html = '  <option value="1" class="v-foto">' +
        '                                Foto' +
        '                            </option>' +
        '                            <option value="2" class="v-video">' +
        '                                Video' +
        '                            </option>';

    $('.combo').html(html);

    //validacion de guardar imagen y video
    $('.v-foto').click(function (event) {
        var html = '         <label for="URLpublicacion">' +
            '                            Insertar foto ' +
            '                        </label>\n' +
            '                        <input id="URLpublicacion" name="URLpublicacion" type="file" accept="image/*" >';
        $('.URLmedia').html(html);
    });
    $('.v-video').click(function (event) {
        var html = '         <label for="URLpublicacion">' +
            '                            Insertar video (max 100mb)' +
            '                        </label>\n' +
            '                        <input id="URLpublicacion" name="URLpublicacion" type="file" accept="video/mp4" >';

        $('.URLmedia').html(html);
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
        paqueteDeDatos.append('URLpublicacion', $('#URLpublicacion')[0].files[0]);
        paqueteDeDatos.append('titulo_publicacion', $('#titulo_publicacion').prop('value'));
        paqueteDeDatos.append('descripcion_publicacion', CKEDITOR.instances['descripcion_publicacion'].getData());
        paqueteDeDatos.append('Categoria', $('#Categoria').prop('value'));
        paqueteDeDatos.append('tipo_publicacion', $('#tipo_publicacion').prop('value'));


        console.log()

        //octener valor input por sus id
        var titulo_publicacion = $('#titulo_publicacion').val();
        var URLpublicacion = $('#URLpublicacion').val();
        var descripcion_publicacion = CKEDITOR.instances['descripcion_publicacion'].getData();


        if (titulo_publicacion.length == 0 || URLpublicacion.length == 0 || descripcion_publicacion.length == 0) {
            swal('Campos Vacios', 'faltan datos ', 'error')
        } else {

            //recacar url del boton
            var url = $('#formulario').attr('action');
            $.ajax({
                type: "POST",
                url: url,
                data: paqueteDeDatos,
                processData: false,
                contentType: false,
                success: function (datos) {
                    console.log(datos);
                    if (datos == "ok") {
                        setTimeout(function () {
                            window.location = window.location;
                        }, 900);
                        swal('Publicacion Registrada', 'guardado en base de datos!', 'success')
                    } else {
                        swal('algo paso', 'faltan datos ', 'error')
                    }
                },
                error: function (error) {
                    console.log(error);
                }
            });


        }
    }

    //modal imagen
    $('.btn-img').click(function (event) {
        var url = $(this).data('url');

        var html = '<div class="imagen">' +
            '<img width="500px" src="' + url + '">' +
            '</div>';

        $('.contenido').html(html);
    });

    //modal video
    $('.btn-video').click(function (event) {
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

        var url = $(this).data('url');
        var titulo = $(this).data('title')

        $('#mimodalLabel_des').html(titulo);

        $('.b_des').html(url);


        $('#modal_des').modal('show');
    });


});