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
                                <i class="far fa-image fa-2x"></i>
                            @endif

                            @if($p->tipo == 2)
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
                                     width="60px" src="{{ Storage::url($p->URLpublicacion) }}" alt="">
                            @endif

                            @if($p->tipo == 2)
                                <video class="btn-video"
                                       data-url="{{ Storage::url($p->URLpublicacion) }}"
                                       data-toggle="modal"
                                       data-target=".media_modal"
                                       width="60px">
                                    <source src="{{ Storage::url($p->URLpublicacion) }}" type="video/mp4">
                                </video>
                            @endif
                        </td>
                        <td>
                            {{$p->descripcionPublicacion}}
                        </td>
                        <td>
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



@endsection

@section('jsextra')
    <script src="{{ asset('js/publicacion.js')}}">
    </script>
@endsection
