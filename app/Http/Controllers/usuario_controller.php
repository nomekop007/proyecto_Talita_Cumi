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
        $inicio = publicacion::where("estado","=","activo")->where("categoria","=",2)->get();
        $galeria = publicacion::where("estado","=","activo")->where("categoria","=",1)->get()->take(6);
        $eventos = evento::where("estado","=","activo")->get();

        return view('v_user.inicio',
            ['inicio' => $inicio,
            'galeria' => $galeria,
                'eventos'=> $eventos]);
    }



    public function vista_eventos(){

        $eventos = evento::all();
        return view('v_user.eventos',['eventos'=> $eventos]);
    }

     public function vista_tienda(){

         $tienda = publicacion::where("estado","=","activo")->where("categoria","=",3)->get();
        return view('v_user.tienda',
            ['tienda' => $tienda]);
    }

    public function vista_MisionyVision(){
        return view('v_user.misionvision');
    }

    public function vista_galeria(){
         $galeria = publicacion::where("estado","=","activo")->where("categoria","=",1)->get();
        return view('v_user.galeria',
            ['galeria' => $galeria]);
    }

    public function vista_historia(){
        return view('v_user.historia');
    }


    public function vista_area()
    {
       return view('v_user.areaFormacion');
    }


    public function vista_detalleEvento(Request $request){
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
        public function vista_detalleTienda(Request $request){
         $id = base64_decode($request->id);

               $objeto = publicacion::find($id);
               $tipo = 2;
               
        return view('v_user.detalle',['objeto' => $objeto,
                                        'tipo'=> $tipo]);
    }

    
}
