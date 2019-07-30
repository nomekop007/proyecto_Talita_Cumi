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


        $publicacion = new publicacion();

        $publicacion->tituloPublicacion = $Request->titulo_publicacion;
        $publicacion->descripcionPublicacion = $Request->descripcion_publicacion;


        $publicacion->URLpublicacion = "x";

        /*
        if ($Request->tipo_publicacion==1){
            $publicacion->URLpublicacion = $Request->file('URLpublicacion')->store('public/foto');
        }else{
            $publicacion->URLpublicacion = $Request->file('URLpublicacion')->store('public/video');
        }
        */

        $publicacion->estado = "activo";
        $publicacion->tipo = $Request->tipo_publicacion;
        $publicacion->categoria = $Request->Categoria;


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
