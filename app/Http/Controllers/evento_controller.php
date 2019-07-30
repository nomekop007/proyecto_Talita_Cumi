<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\evento;


class evento_controller extends Controller
{
       public function index()
    {
         $data = array(
        'n3' => '',
        'n1' => '',
        'n2' => '',
        'n4' => 'active'
    );
       return view('v_admin.v_eventos')->with('datos', $data);
    }

    
    public function v_create()
    {
         $data = array(
        'n3' => '',
        'n1' => '',
        'n2' => 'active',
        'n4' => ''
    );
        return view('v_admin.v_crear_eventos')->with('datos', $data);
    }


    public function __construct()
    {
        $this->middleware('auth');
    }


}
