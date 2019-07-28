<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        /*para que empieze seleccionada la opcion 3 (publicaciones) */
    $data = array(
        'n3' => 'active',
        'n1' => '',
        'n2' => '',
        'n4' => ''
    );

        return view('v_admin/v_publicaciones')->with('datos', $data);
    }
}
