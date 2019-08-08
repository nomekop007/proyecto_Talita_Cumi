@extends('home')

@section('ubicacion')
    <section class="content-header">
        <h1>
            Eventos
            <small>Panel administrativo</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fas fa-align-justify"></i> Menu</a></li>
            <li class="active">Eventos</li>
        </ol>
    </section>
@endsection


@section('contenido')
    <div class="form-row">
        <div class="form-group col-md-12">
            <p class="bg-info text-center">
                Eventos del sitio web
            </p>
            <br>
            <table class="table mi-dataTable text-center">
                <thead class="thead-dark ">
                <tr>
                    <th scope="col">
                        Titulo
                    </th>
                    <th scope="col">
                        Fechas
                    </th>
                    <th scope="col">
                        Foto
                    </th>
                    <th scope="col">
                        Descripcion
                    </th>
                    <th scope="col">
                        Creado
                    </th>
                    <th scope="col">
                        Acciones
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($eventos as $e)
                    <tr>
                        <td>
                            <div style="visibility: hidden">.</div>

                            {{ $e->tituloEvento }}
                        </td>
                        <td>
                            Inicio: <p>{{ $e->fechaInicio }}</p>
                            Fin: <p>{{ $e->fechaFin }}</p>
                        </td>
                        <td>
                            <img class="btn-img"
                                 data-url="{{ Storage::url($e->URLfoto) }}"
                                 data-toggle="modal"
                                 data-target=".media_modal"
                                 width="160px" src="{{ Storage::url($e->URLfoto) }}" alt="">

                        </td>
                        <td>
                            <div style="visibility: hidden">.</div>
                            <a class="btn-descripcion"
                               data-url="{{$e->descripcionEvento}}"
                               data-title="{{$e->tituloEvento}}"
                               data-toggle="modal"
                               data-target="#modal-default">
                                <i class="far fa-eye color"></i></i>
                            </a>
                        </td>
                        <td>
                            <div style="visibility: hidden">.</div>
                            <i>{{$e->created_at}}</i>
                        </td>
                        <td>
                            <div style="visibility: hidden">.</div>
                            <button class="btn btn-info btn-edit btn-sm"
                                    data-id="{{ base64_encode($e->id) }}"
                                    data-url="{{ route('getEvento') }}">
                                <i class="far fa-edit">
                                </i>
                            </button>

                            @if($e->estado == 'inactivo')
                                <button class="btn btn-success btn-public"
                                        data-id="{{ base64_encode($e->id) }}"
                                        data-url="{{ route('upEvento') }}"><i class="fas fa-upload"></i>Publicar
                                </button>
                            @endif
                            @if($e->estado == 'activo')
                                <button class="btn btn-warning btn-ocultar"
                                        data-id="{{ base64_encode($e->id) }}"
                                        data-url="{{ route('upEvento') }}"><i class="fab fa-creative-commons-pd"></i>Ocultar
                                </button>
                            @endif
                        </td>
                    </tr>
                @endforeach


                </tbody>
            </table>
        </div>
    </div>




    <!--Modal media -->
    <div class="modal fade media_modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content contenido">

            </div>
        </div>
    </div>


    <!--Modal Descripcion -->
    <div class="modal fade example-modal" id="modal-default">
        <div class="modal-dialog" id="mdialTamanio">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="mimodalLabel_des">Default Modal</h4>
                </div>

                <div class="modal-body b_des">

                    <div class="overlay">
                        <i class="fa fa-refresh fa-spin fa-2x"> </i>
                        <h6>Cargando...</h6>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary " data-dismiss="modal">cerrar</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal de eliminar -->
    <div class="modal fade example-modal" id="modal_eliminar">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="mimodalLabel_eliminar">Default Modal</h4>
                </div>
                <div class="modal-body b_eliminar">
                    <p>One fine body&hellip;</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">cancelar</button>
                    <button class="btn btn-danger" data-dismiss="modal" data-url="{{ route('deleteEvento') }}"
                            id="eliminar" type="button">
                        eliminar
                    </button>
                </div>
            </div>
        </div>
    </div>



    <!-- Modal de editar -->
    <div class="modal fade example-modal" id="modal_editar">
        <div class="modal-dialog" id="mdialTamanio">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="mimodalLabel_editar">Default Modal</h4>
                </div>
                <div class="modal-body b_editar col-md-12">

                    <div class="overlay text-center">
                        <i class="fa fa-refresh fa-spin fa-2x"> </i>
                        <h6>Cargando...</h6>
                    </div>

                </div>
                <div class="modal-footer btn_editar">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">cancelar</button>

                    <button class="btn btn-danger btn btn-delete btn-sm"
                            data-url="{{ route('getEvento') }}">
                        Eliminar Publicacion
                    </button>
                    <!--data-dismiss="modal" -->
                    <button type="button" class="btn btn-info" data-url="{{ route('updateEvento') }}" id="editar">
                        guardar
                        cambios
                    </button>
                </div>
            </div>
        </div>
    </div>





@endsection

@section('jsextra')
    <script src="{{ asset('js/evento.js')}}">
    </script>
@endsection