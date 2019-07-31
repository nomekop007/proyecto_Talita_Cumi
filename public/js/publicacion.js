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


        var paqueteDeDatos = new FormData();
        //rescatar los valores de los input y guardarlas en un formData
        paqueteDeDatos.append('URLpublicacion', $('#URLpublicacion')[0].files[0]);
        paqueteDeDatos.append('titulo_publicacion', $('#titulo_publicacion').prop('value'));
        paqueteDeDatos.append('descripcion_publicacion', $('#descripcion_publicacion').prop('value'));
        paqueteDeDatos.append('Categoria', $('#Categoria').prop('value'));
        paqueteDeDatos.append('tipo_publicacion', $('#tipo_publicacion').prop('value'));

        console.log(paqueteDeDatos)




        //octener valor input por sus id
        var titulo_publicacion = $('#titulo_publicacion').val();
        var URLpublicacion = $('#URLpublicacion').val();
        var descripcion_publicacion = $('#descripcion_publicacion').val();
        if (titulo_publicacion.length == 0 || URLpublicacion.length == 0 || descripcion_publicacion.length == 0) {
            swal('Campos Vacios', 'faltan datos ', 'error')
        }else {

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


    }


});