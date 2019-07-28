<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class evento_controller extends Controller
{
       public function index()
    {
       return view('v_admin.v_eventos');
    }

    
    public function v_create()
    {
        return view('v_admin.v_crear_eventos');
    }


    public function __construct()
    {
        $this->middleware('auth');
    }


}
