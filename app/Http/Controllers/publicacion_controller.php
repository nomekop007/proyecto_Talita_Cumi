<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\publicacion;

class publicacion_controller extends Controller
{

    public function index()
    {
        $data = array(
            'n3' => 'active',
            'n1' => '',
            'n2' => '',
            'n4' => ''
        );
        return view('v_admin.v_publicaciones')->with('datos', $data);
    }


    public function v_create()
    {
        $data = array(
            'n3' => '',
            'n1' => 'active',
            'n2' => '',
            'n4' => ''
        );
        return view('v_admin.v_crear_publicaciones')->with('datos', $data);
    }

    public function crearPublicacion(Request $Request)
    {


        /* $this->validate($Request,
             [
                 'titulo_publicacion' => ['required'],
                 'Url' => ['required']
             ]); */

        $publicacion = new publicacion();

        $publicacion->tituloPublicacion = $Request->tituloPublicacion;
        $publicacion->descripcionPublicacion = $Request->descripcionPublicacion;
        $publicacion->URLpublicacion = $Request->URLpublicacion;
        $publicacion->estado = $Request->estado;
        $publicacion->tipo = $Request->tipo;
        $publicacion->categoria = $Request->categoria;


        //guardar en la base de datos
        if ($publicacion->save()) {
            return "ok";
        } else {
            return "error";
        }

        return view('v_admin.v_crear_publicaciones');


    }

    public function __construct()
    {
        $this->middleware('auth');
    }

}
