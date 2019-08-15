@extends('home')

@section('ubicacion')
    <section class="content-header">
        <h1>
            Publicaciones
            <small>
                Panel administrativo
            </small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">
                    <i class="fas fa-align-justify">
                    </i>
                    Menu
                </a>
            </li>
            <li class="active">
                Publicaciones
            </li>
        </ol>
    </section>
@endsection


@section('contenido')
    <div class="form-row">
        <div class="form-group col-md-12">
            <p class="barra_plomo text-center">
                Publicaciones del sitio web
            </p>
            <br>

            <table class="table mi-dataTable text-center ">
                <thead class="thead-dark  barra_rosado_oscuro">
                <tr>
                    <th scope="col">
                        Titulo
                    </th>
                    <th scope="col">
                        Tipo
                    </th>
                    <th scope="col">
                        Ubicacion
                    </th>
                    <th scope="col">
                        Media
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
                <tbody class="barra_plomo">
                @foreach($publicaciones as $p)
                    <tr>
                        <td>
                            <div style="visibility: hidden">.</div>
                            @if($p->tituloPublicacion == null)
                                Media N° {{ $p->id }}
                            @endif
                            {{ $p->tituloPublicacion }}
                        </td>
                        <td>
                            @if($p->tipo == 1)
                                <div style="visibility: hidden">foto</div>
                                <i class="far fa-image fa-2x"></i>
                                <div style="visibility: hidden">imagen</div>
                            @endif

                            @if($p->tipo == 2)
                                <div style="visibility: hidden">video</div>
                                <i class="fas fa-film fa-2x"></i>
                            @endif
                        </td>
                        <td>
                            <div style="visibility: hidden">.</div>
                            @if($p->categoria == 1)
                                <i>Galeria multimedia</i>
                            @endif

                            @if($p->categoria == 2)
                                <i>Pagina de inicio</i>
                            @endif
                            @if($p->categoria == 3)
                                <i>Tienda online</i>
                            @endif
                        </td>
                        <td>
                            @if($p->tipo == 1)
                                <img class="btn-img"
                                     data-url="{{ Storage::url($p->URLpublicacion) }}"
                                     data-toggle="modal"
                                     data-target=".media_modal"
                                     width="120px" src="{{ Storage::url($p->URLpublicacion) }}" alt="">
                            @endif

                            @if($p->tipo == 2)
                                <video class="btn-video"
                                       data-url="{{ Storage::url($p->URLpublicacion) }}"
                                       data-toggle="modal"
                                       data-target=".media_modal"
                                       width="120px">
                                    <source src="{{ Storage::url($p->URLpublicacion) }}" type="video/mp4">
                                </video>
                            @endif
                        </td>
                        <td>
                            <div style="visibility: hidden">.</div>
                            @if($p->descripcionPublicacion == null)
                                <i class="far fa-eye-slash"></i>
                            @endif
                            @if($p->descripcionPublicacion != null)
                                <a class="btn-descripcion"
                                   data-url="{{$p->descripcionPublicacion}}"
                                   data-title="{{$p->tituloPublicacion}}"
                                   data-toggle="modal"
                                   data-target="#modal-default">
                                    <i class="far fa-eye color"></i></i>
                                </a>
                            @endif

                        </td>
                        <td>
                            <div style="visibility: hidden">.</div>
                            <i>{{$p->created_at}}</i>
                        </td>
                        <td>
                            <div style="visibility: hidden">.</div>
                            <button class="btn btn-info btn-edit btn-sm"
                                    data-id="{{ base64_encode($p->id) }}"
                                    data-url="{{ route('getPublicidad') }}">
                                <i class="far fa-edit">
                                </i>
                            </button>

                            @if($p->estado == 'inactivo')
                                <button class="btn btn-success btn-public"
                                        data-id="{{ base64_encode($p->id) }}"
                                        data-url="{{ route('upPublicidad') }}"><i class="fas fa-upload"></i>Publicar
                                </button>
                            @endif
                            @if($p->estado == 'activo')
                                <button class="btn btn-warning btn-ocultar"
                                        data-id="{{ base64_encode($p->id) }}"
                                        data-url="{{ route('upPublicidad') }}"><i
                                            class="fab fa-creative-commons-pd"></i>Ocultar
                                </button>
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            </br>
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
                    <button class="btn btn-danger" data-dismiss="modal" data-url="{{ route('deletePublicacion') }}"
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
                    <h4 class="modal-title" id="mimodalLabel_editar">Cargando modal</h4>
                </div>
                <div class="modal-body b_editar col-md-12">

                    <div class="overlay text-center">
                        <i class="fa fa-refresh fa-spin fa-2x"> </i>
                        <h6>Cargando...</h6>
                    </div>

                </div>
                <div class="modal-footer btn_editar">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">cancelar</button>
                    <div class="overlay text-center btn" id="subiendo" >
                        <i class="fa fa-refresh fa-spin fa-1x"> </i>
                        <h6>actualizando...</h6>
                    </div>
                    <button class="btn btn-danger btn btn-delete btn-sm"
                            data-url="{{ route('getPublicidad') }}">
                        Eliminar Publicacion
                    </button>
                    <!--data-dismiss="modal" -->
                    <button type="button" class="btn btn-info" data-url="{{ route('updatePublicacion') }}" id="editar">
                        guardar
                        cambios
                    </button>
                </div>
            </div>
        </div>
    </div>




@endsection

@section('jsextra')
    <script src="{{ asset('js/js_admin/publicacion.js')}}">
    </script>

    <!-- DataTables -->
    <script src="{{ asset('js/js_admin/cargarTabla.js')}}">
    </script>
    <script src="{{ asset('adminLTE_admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('adminLTE_admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>

@endsection
