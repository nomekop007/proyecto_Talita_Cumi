<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\publicacion;
use App\evento;


class usuario_controller extends Controller
{

    public function index()
    {
        $publicacions = publicacion::all();
        $eventos = evento::all();
        return view('v_user.inicio',
            ['publicaciones' => $publicacions,
                'eventos'=> $eventos]);
    }



    public function vista_eventos(){

        $eventos = evento::all();

        return view('v_user.eventos',['eventos'=> $eventos]);
    }
}
