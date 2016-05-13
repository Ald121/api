<?php

namespace App\Http\Controllers;

use App\Noticia;
use App\Deporte;
use App\Farandula;
use App\Curiosidades;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Noticias extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {

        $noticias=Noticia::all();
        return response()->json($noticias->toArray());

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request) {
      
$categoria=$request->input('categoria');

if ($request->input('categoria')=="Deportes") {
     $tabla = new Deporte;
    //return response()->json(["mensaje"=>"Deportes"]);
};
if ($request->input('categoria')=="Noticia") {
    $tabla = new Noticia;
   // return response()->json(["mensaje"=>"Farandula"]);
};
if ($request->input('categoria')=="Farandula") {
    $tabla = new Farandula;
   // return response()->json(["mensaje"=>"Farandula"]);
};
if ($request->input('categoria')=="Curiosidades") {
    $tabla = new Curiosidades;
   // return response()->json(["mensaje"=>"Farandula"]);
};
    //$tabla->id = $request->input('id');
        $tabla->titulo = $request->input('titulo');
        $tabla->descripcion = $request->input('descripcion');
        $tabla->URL = $request->input('URL');
        $tabla->referencia = $request->input('referencia');
        $tabla->img = "1.jpg";
        $tabla->estado = "1";
        $tabla->save();
       return response()->json(["mensaje"=>"Noticia creada correctamente "]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        return Noticia::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id) {
        $employee = Noticia::find($id);

        $employee->name = $request->input('name');
        $employee->email = $request->input('email');
        $employee->contact_number = $request->input('contact_number');
        $employee->position = $request->input('position');
        $employee->save();

        return "Noticia actualizada correctamente #" . $employee->id;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Request $request,$id) {

        $employee = Noticia::find($id);

        $employee->delete();

        return "Noticica eliminada correctamente #" . $request->$id;
    }
}
