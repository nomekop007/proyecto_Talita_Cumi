<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\publicacion;
use App\evento;


class usuario_controller extends Controller
{

    public function index()
    {
        //colocar condiccion de que publicidad saldra 
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

     public function vista_tienda(){
        return view('v_user.tienda');
    }

    public function vista_MisionyVision(){
        return view('v_user.misionvision');
    }

    public function vista_galeria(){
         $publicacions = publicacion::all();
        return view('v_user.galeria',
            ['publicaciones' => $publicacions]);
    }

    public function vista_historia(){
        return view('v_user.historia');
    }


    public function vista_area()
    {
       return view('v_user.areaFormacion');
    }


    public function vista_detalle(Request $request){
         $id = base64_decode($request->id);

              $objeto = evento::find($id);
                $tipo = 0;
        
        return view('v_user.detalle',['objeto' => $objeto,
                                        'tipo'=> $tipo]);
    }


        public function vista_detallePublicacion(Request $request){
         $id = base64_decode($request->id);

               $objeto = publicacion::find($id);
               $tipo = 1;
               
        return view('v_user.detalle',['objeto' => $objeto,
                                        'tipo'=> $tipo]);
    }
}
