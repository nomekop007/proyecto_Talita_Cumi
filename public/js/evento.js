$(document).ready(function () {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


//Date range picker with time picker
    $('#fecha_evento').daterangepicker({
        timePicker: true, timePickerIncrement: 30,
        locale: {
            format: 'YYYY/MM/DD hh:mm',
            daysOfWeek: ['Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sa', 'Do'],
            monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre']
        },


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
        paqueteDeDatos.append('descripcion_evento', $('#descripcion_evento').prop('value'));

        var fecha_evento = $('#fecha_evento').val();
        var dates = fecha_evento.split(" - ");
        paqueteDeDatos.append('fechaInicio', dates[0]);
        paqueteDeDatos.append('fechaFin', dates[1]);


        //octener valor input por sus id
        var titulo_evento = $('#titulo_evento').val();
        var url = $('#URLevento').val();
        var descripcion_evento = $('#descripcion_evento').val();

        if (titulo_evento.length == 0 || url.length == 0 || descripcion_evento.length == 0) {

            swal('Campos Vacios', 'faltan datos ', 'error');

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