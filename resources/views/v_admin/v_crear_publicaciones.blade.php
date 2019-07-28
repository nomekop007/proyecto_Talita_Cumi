@extends('home')

@section('ubicacion')
<section class="content-header">
    <h1>
        crear publicacion
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
            crear publicacion
        </li>
    </ol>
</section>
@endsection


@section('contenido')
<form>
    <div class="form-row">
        <div class="form-group col-md-12">
            <p class="bg-info text-center">
                Crear Publicacion en el sitio web
            </p>
            <div class="form row">
                <div class="form-group col-md-6">
                    <label for="Publicacion">
                        Titulo Publicacion
                    </label>
                    <input class="form-control" id="Publicacion" maxlength="30" name="Publicacion" placeholder="ingrese un titulo" type="text">
                    </input>
                </div>
                <div class="form-group col-md-6">
                    <label for="t_publicacion">
                        Tipo Publicacion
                    </label>
                    <br>
                        <select class="form-control" id="t_publicacion" name="t_publicacion">
                            <option value="Foto">
                                Foto
                            </option>
                            <option value="Video">
                                Video
                            </option>
                        </select>
                    </br>
                </div>
                <div class="form-group col-md-6">
                    <label for="Categoria">
                        Ubicacion de la Publicacion
                    </label>
                    <br>
                        <select class="form-control" id="Categoria" name="Categoria">
                            <option value="galeria">
                                En Galeria
                            </option>
                            <option value="inicio">
                                Pagina de Inicio
                            </option>
                            <option value="tienda">
                                Tienda Online
                            </option>
                        </select>
                    </br>
                </div>
                <div class="form-group col-md-6">
                    <label for="Url">
                        Buscar archivo .PNG .SVG .JPG .MP4 .MKV
                    </label>
                    <input id="Url" name="Url" type="file">
                    </input>
                </div>
                <div class="form-group col-md-12">
                    <div class="box">
                        <div class="box-header">
                            <h4 class="box-title">
                               Descripcion
                            </h4>
                            <!-- tools box -->
                            <div class="pull-right box-tools">
                                <button class="btn btn-default btn-sm" data-toggle="tooltip" data-widget="collapse" title="Collapse" type="button">
                                    <i class="fa fa-minus">
                                    </i>
                                </button>
                            </div>
                            <!-- /. tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body pad">
                            <form>
                                <textarea class="textarea" placeholder="Pon un texto aquí" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                </textarea>
                            </form>
                        </div>
                    </div>
                </div>



                <div class="form-group col-md-12">
                    <button class="btn btn-primary btn-sm" data-url="" id="btnEnviar" type="submit">
                        Crear Publicacion
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
