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

        return view('index',
            ['publicaciones' => $publicacions]);
    }
}
