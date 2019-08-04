<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\publicacion;

class publicacion_controller extends Controller
{

    public function index()
    {

        $publicacions = publicacion::all();

        // señal de active del menu
        $menu = array(
            'n3' => 'active',
            'n1' => '',
            'n2' => '',
            'n4' => ''
        );

        return view('v_admin.v_publicaciones',
            ['publicaciones' => $publicacions,
                'menus' => $menu]);
    }

    public function v_create()
    {
        $menu = array(
            'n3' => '',
            'n1' => 'active',
            'n2' => '',
            'n4' => ''
        );
        return view('v_admin.v_crear_publicaciones')->with('menus', $menu);
    }

    public function crearPublicacion(Request $Request)
    {
        $publicacion = new publicacion();

        $publicacion->tituloPublicacion = $Request->titulo_publicacion;
        $publicacion->descripcionPublicacion = $Request->descripcion_publicacion;
        $publicacion->tipo = $Request->tipo_publicacion;
        $publicacion->categoria = $Request->Categoria;
        $publicacion->estado = "inactivo";

        if ($Request->tipo_publicacion == 1) {
            $publicacion->URLpublicacion = $Request->file('URLpublicacion')->store('public/foto');
        } else {
            $publicacion->URLpublicacion = $Request->file('URLpublicacion')->store('public/video');
        }


        //guardar en la base de datos
        if ($publicacion->save()) {
            return "ok";
        } else {
            return "error";
        }

        return view('v_admin.v_crear_publicaciones');


    }

    public function getByID(request $request)
    {
        $id = base64_decode($request->id);
        $publicacion = publicacion::find($id);
        return $publicacion;
    }

    public function destroy(request $request)
    {
        $id = base64_decode($request->id);
        $publicacion = publicacion::find($id);

        //elimina el archivo del storage
        $url = $publicacion->URLpublicacion;

        if (@getimagesize(storage_path('app/' . $url))) {
            unlink(storage_path('app/' . $url));
        }


        if ($publicacion->delete()) {
            return "ok";
        } else {
            return "error";
        }
    }

    public function update(Request $request)
    {
        $id = base64_decode($request->id);
        $publicacion = publicacion::find($id);

        $publicacion->tituloPublicacion = $request->titulo_publicacion;
        $publicacion->categoria = $request->Categoria;
        $publicacion->tipo = $request->tipo_publicacion;
        $publicacion->descripcionPublicacion = $request->descripcion_publicacion;


        // pregunta si se selecciono un nuevo archivo
        if ($request->URLpublicacion != 'x') {

            //elimina el archivo del storage
            $url = $publicacion->URLpublicacion;

            //pregunta si el archivo esta en el storage
            if (@getimagesize(storage_path('app/' . $url))) {
                unlink(storage_path('app/' . $url));
            }

            if ($publicacion->tipo == 1) {
                $publicacion->URLpublicacion = $request->file('URLpublicacion')->store('public/foto');
            } else {
                $publicacion->URLpublicacion = $request->file('URLpublicacion')->store('public/video');
            }
        }

        if ($publicacion->update()) {
            return "ok";
        } else {
            return "error";
        }


    }


    public function __construct()
    {
        $this->middleware('auth');
    }

}
