$(document).ready(function () {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });



//Date range picker with time picker
    $('#fecha_evento').daterangepicker({ 
    	timePicker: true, timePickerIncrement: 30, locale: { format: 'MM/DD/YYYY hh:mm A' }});


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
        paqueteDeDatos.append('descripcion_evento', $('#descripcion_evento').prop('value'));
        paqueteDeDatos.append('fecha_evento', $('#fecha_evento').prop('value'));

     


        //octener valor input por sus id
        var titulo_evento = $('#titulo_evento').val();
        var url = $('#URLevento').val();
        var descripcion_evento = $('#descripcion_evento').val();
        var fecha_evento = $('#fecha_evento').val();

  		console.log(fecha_evento);
        if (titulo_evento.length == 0 || url.length == 0 || 
        	descripcion_evento.length == 0 || fecha_evento.length == 0) {

            swal('Campos Vacios', 'faltan datos ', 'error');

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
                        swal('Evento Registrado', 'guardado en base de datos!', 'success')
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