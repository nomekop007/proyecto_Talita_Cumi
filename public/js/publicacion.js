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

       /* var paqueteDeDatos = new FormData();
        paqueteDeDatos.append('URLpublicacion', $('#URLpublicacion')[0].files[0]);
        paqueteDeDatos.append('titulo_publicacion', $('#titulo_publicacion').prop('value'));
        paqueteDeDatos.append('descripcion_publicacion', $('#descripcion_publicacion').prop('value'));
        paqueteDeDatos.append('Categoria', $('#Categoria').prop('value'));
        paqueteDeDatos.append('tipo_publicacion', $('#tipo_publicacion').prop('value'));
        */




        //octener valor input por sus id
        var titulo_publicacion = $('#titulo_publicacion').val();
        var tipo_publicacion = $('#tipo_publicacion').val();
        var Categoria = $('#Categoria').val();
        var URLpublicacion = $('#URLpublicacion').val();
        var estado = 'activo';
        var descripcion_publicacion = $('#descripcion_publicacion').val();

        //recacar url del boton
        var url = $('#formulario').attr('action');



            $.ajax({
                type: "POST",
                url: url,
                data: {
                    titulo_publicacion: titulo_publicacion,
                    tipo_publicacion: tipo_publicacion,
                    Categoria: Categoria,
                    URLpublicacion: URLpublicacion,
                    estado:estado,
                    descripcion_publicacion:descripcion_publicacion
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