<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\evento;
use Image;


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
                    ['menus' => $menu,
                        'eventos' => $eventos]);
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
        $evento->creator = auth()->user()->name;

        /* crea la imagen original */
        $path = $Request->file('URLevento')->store('public/evento');
        /* extrae el nombre del archivo */
        $fileName = collect(explode('/', $path))->last();
        /* remplaza la imagen original por la nueva */
        $image = Image::make($Request->file('URLevento'));
        /* refigura la imagen */
        $image->resize(1280, null, function ($constraint) {
        $constraint->aspectRatio();
        $constraint->upsize();
        });
        /* guarda la nueva imagen en el storage */
        $image->save("storage/evento/$fileName");


        $evento->URLfoto = $path;
        $evento->estado = "inactivo";
        $evento->fecha = $Request->fecha;
        $evento->ubicacion = $Request->ubicacion;


        //guardar en la base de datos
        if ($evento->save()) {
            return "ok";
        } else {
            return "error";
        }

        return view('v_admin.v_crear_eventos');
    }





    //funciones nuevas
    public function getByID(request $request)
    {
        $id = base64_decode($request->id);
        $evento = evento::find($id);
        return $evento;
    }

    public function destroy(request $request)
    {
        $id = base64_decode($request->id);
        $evento = evento::find($id);

        //elimina el archivo del storage
        $url = $evento->URLfoto;

        if (file_exists(storage_path('app/' . $url))) {
            unlink(storage_path('app/' . $url));
        }


        if ($evento->delete()) {
            return $id;
        } else {
            return "error";
        }
    }

    public function update(Request $request)
    {
        $id = base64_decode($request->id);
        $evento = evento::find($id);
        $evento->creator = auth()->user()->name;
        $evento->tituloEvento = $request->titulo_evento;
        $evento->descripcionEvento = $request->descripcion_evento;
        $evento->fecha = $request->fecha_evento;
        $evento->ubicacion = $request->ubicacion_evento;


        // pregunta si no se selecciono un nuevo archivo
        if ($request->URLevento != 'x') {

            $url = $evento->URLfoto;


            //pregunta si el archivo esta en el storage
            if (file_exists(storage_path('app/' . $url))) {
                //elimina el archivo del storage
                unlink(storage_path('app/' . $url));
            }

        /* crea la imagen original */
        $path = $request->file('URLevento')->store('public/evento');
        /* extrae el nombre del archivo */
        $fileName = collect(explode('/', $path))->last();
        /* remplaza la imagen original por la nueva */
        $image = Image::make($request->file('URLevento'));
        /* refigura la imagen */
        $image->resize(1280, null, function ($constraint) {
        $constraint->aspectRatio();
        $constraint->upsize();
        });
        /* guarda la nueva imagen en el storage */
        $image->save("storage/evento/$fileName");


         $evento->URLfoto = $path;
    
        }

        if ($evento->update()) {
            return "ok";
        } else {
            return "error";
        }


    }

    public function subir(Request $request){
        $id = base64_decode($request->id);
        $evento = evento::find($id);

        if ($evento->estado == 'inactivo'){

            $evento->estado = 'activo';
        }else{
            $evento->estado = 'inactivo';
        }


        if ($evento->update()) {
            return $evento;
        } else {
            return "error";
        }
    }







    public function __construct()
    {
        $this->middleware('auth');
    }


}
