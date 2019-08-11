$(document).ready(function () {
//cargarTabla();




    function cargarTabla(){
        var url = $('#mostrar').data('url');

        $.ajax({
            url     : url,
            method  : 'GET',
            success : function(datos){
                let lista = datos;
                let htmlCode = ``;

                $.each(lista, function(index, item){
                    htmlCode+=``;
                });

                $('.mydatatable').html(htmlCode);
            }
        });

    }


});


/*
                            <tr>
                                <td>${item.tituloEvento}</td>
                                <td>${item.descripcionEvento}</td>
                                <td>${item.URLfoto}</td>
                                <td>${item.estado}</td>
                                <td>${item.fechaInicio}</td>
                                <td>${item.fechaFin}</td>

                            </tr>
*/
