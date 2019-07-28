<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function __construct()
    {
        $this->middleware('auth');
    }
   
}
