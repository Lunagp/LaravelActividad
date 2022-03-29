<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Estudiante;

class EstudianteController extends Controller
{
    public function index(){
        $estudiante = Estudiante::all();
        return $estudiante;
    }

    public function store(Request $request){
        $request->validate([
            'Nom_estudiante'=> 'required', 
            'Ape_estudiante'=> 'required',
            'Direccion'=> 'required',
            'Telefono',
            'Tipo_doc'=> 'required',
            'Num_doc'=> 'required'
         ]);
 
         $estudiante = new Estudiante();
         $estudiante->Nom_estudiante = $request->Nom_estudiante;
         $estudiante->Ape_estudiante = $request->Ape_estudiante;
         $estudiante->Direccion = $request->Direccion;
         $estudiante->Telefono = $request->Telefono;
         $estudiante->Tipo_doc = $request->Tipo_doc;
         $estudiante->Num_doc = $request->Num_doc;
         $estudiante->save();
 
         return response()->json([
             "status" => 1,
             "msg" => "¡Registro de estudiante exitoso!",
         ]); 
    }

    public function update(Request $request, $id)
    {
        $estudiante = Estudiante::findOrFail($request->id);
        $estudiante->Nom_estudiante = $request->Nom_estudiante;
        $estudiante->Ape_estudiante = $request->Ape_estudiante;
        $estudiante->Direccion = $request->Direccion;
        $estudiante->Telefono = $request->Telefono;
        $estudiante->Tipo_doc = $request->Tipo_doc;
        $estudiante->Num_doc = $request->Num_doc;
        $estudiante->save();
        return $estudiante;
    }

    public function destroy(Request $request,$id)
    {
      $estudiante = Estudiante::destroy($request->id);
      return $estudiante;
    }
    
}
