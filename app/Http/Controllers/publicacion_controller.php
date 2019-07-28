<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class publicacion_controller extends Controller
{
   
    public function index()
    {
       return view('v_admin.v_publicaciones');
    }

    
    public function v_create()
    {
        return view('v_admin.v_crear_publicaciones');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
   
}
