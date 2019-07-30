$(document).ready(function () {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });





    //valida los campos y guarda en base de datos
    $('#btnEnviar').click(function (event) {
        event.preventDefault();
        validarCampos();
    });


    //validar y guardar en bd
    function validarCampos() {

        //octener valor input por sus id
        var titulo = $('#titulo_publicacion').val();
        var tipo = $('#tipo_publicacion').val();
        var categoria = $('#Categoria').val();
        var url_media = $('#Url').val();
        var estado = 'activo';
        var descripcion = $('#descripcion').val();

        //recacar url del boton
        var url = $('#btnEnviar').data('url');


            $.ajax({
                type: "POST",
                url: url,
                data: {
                    tituloPublicacion: titulo,
                    tipo: tipo,
                    categoria: categoria,
                    URLpublicacion: url_media,
                    estado:estado,
                    descripcionPublicacion:descripcion
                },
                success: function (datos) {
                    console.log(datos);
                    if (datos == "ok") {
                        setTimeout(function () {
                            window.location = window.location;
                        }, 700);
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


});