<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\evento;


class evento_controller extends Controller
{
    public function index()
    {

        $eventos = evento::all();

        $menu = array(
            'n3' => '',
            'n1' => '',
            'n2' => '',
            'n4' => 'active'
        );
        return view('v_admin.v_eventos',
                    ['eventos' => $eventos, 
                    'menus' => $menu]);
    }


    public function v_create()
    {
        $menu = array(
            'n3' => '',
            'n1' => '',
            'n2' => 'active',
            'n4' => ''
        );
        return view('v_admin.v_crear_eventos')->with('menus', $menu);
    }

    public function crearEvento(Request $Request)
    {
        $evento = new evento();

        $evento->tituloEvento = $Request->titulo_evento;
        $evento->descripcionEvento = $Request->descripcion_evento;
        $evento->URLfoto = $Request->file('URLevento')->store('public/evento');


        $evento->fechaInicio = $Request->fechaInicio;
        $evento->fechaFin = $Request->fechaFin;


        //guardar en la base de datos
        if ($evento->save()) {
            return "ok";
        } else {
            return "error";
        }

        return view('v_admin.v_crear_eventos');


    }


    public function __construct()
    {
        $this->middleware('auth');
    }


}
