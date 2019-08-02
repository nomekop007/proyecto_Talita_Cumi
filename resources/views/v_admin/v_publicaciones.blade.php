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
            <p class="bg-info text-center">
                Publicaciones del sitio web
            </p>
            <br>
            <table class="table mi-dataTable text-center">
                <thead class="thead-dark ">
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
                <tbody>
                @foreach($publicaciones as $p)
                    <tr>
                        <td>
                            {{ $p->tituloPublicacion }}
                        </td>
                        <td>
                            @if($p->tipo == 1)
                                <div style="visibility: hidden">imagen</div>
                                <i class="far fa-image fa-2x"></i>
                            @endif

                            @if($p->tipo == 2)
                                <div style="visibility: hidden">video</div>
                                <i class="fas fa-film fa-2x"></i>
                            @endif
                        </td>
                        <td>
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
                                     width="150px" src="{{ Storage::url($p->URLpublicacion) }}" alt="">
                            @endif

                            @if($p->tipo == 2)
                                <video class="btn-video"
                                       data-url="{{ Storage::url($p->URLpublicacion) }}"
                                       data-toggle="modal"
                                       data-target=".media_modal"
                                       width="150px">
                                    <source src="{{ Storage::url($p->URLpublicacion) }}" type="video/mp4">
                                </video>
                            @endif
                        </td>
                        <td>
                            <a class="btn-descripcion"
                               data-url="{{$p->descripcionPublicacion}}"
                               data-title="{{$p->tituloPublicacion}}"
                               data-toggle="modal"
                               data-target="#modal-default">
                                <i class="far fa-eye color"></i></i>
                            </a>
                        </td>
                        <td>
                            <i>{{$p->created_at}}</i>
                        </td>
                        <td>
                            <button class="btn btn-info btn-edit btn-sm">
                                <i class="far fa-edit">
                                </i>
                            </button>
                            <button class="btn btn-danger btn btn-delete btn-sm"
                                    data-id="{{ base64_encode($p->id) }}"
                                    data-url="{{ route('getPublicidad') }}">
                                <i class="far fa-trash-alt">
                                </i>
                            </button>
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
                    <p>One fine body&hellip;</p>
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


@endsection

@section('jsextra')
    <script src="{{ asset('js/publicacion.js')}}">
    </script>
@endsection
