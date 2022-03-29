<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Materia;

class MateriaController extends Controller
{
    public function index(){
        $materia = Materia::all();
        return $materia;
    }

    public function store(Request $request){
        $request->validate([
            'Nombre' => 'required',
            'Descripcion' => 'required'
         ]);
 
         $materia = new Materia();
         $materia->Nombre = $request->Nombre;
         $materia->Descripcion = $request->Descripcion;
         $materia->save();
 
         return response()->json([
             "status" => 1,
             "msg" => "¡Registro de materia exitoso!",
         ]);
    }

    public function update(Request $request, $id)
    {
        $materia = Materia::findOrFail($request->id);
        $materia->Nombre = $request->Nombre;
        $materia->Descripcion = $request->Descripcion;
        $materia->save();
        return $materia;
    }
    
    // public function update(Request $request, $id){
    //     $materia = Materia::findOrFail($request->$id);
    //     $materia -> Nombre = $request->Nombre;
    //     $materia -> Descripcion = $request->Descripcion;
    //     $materia -> save();
    //     return $materia;
    // }

    public function destroy(Request $request,$id)
    {
      $materia = Materia::destroy($request->id);
      return $materia;
   }
    
}
