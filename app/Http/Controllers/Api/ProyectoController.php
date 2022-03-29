<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Proyecto;
class ProyectoController extends Controller
{
    public function index(){
        $proyecto = Proyecto::all();
        return $proyecto;
    }

    public function store(Request $request){
        $request->validate([
            'Nom_proyecto'=> 'required',
            'Tiempo_inicio'=> 'required',
            'Tiempo_final'=> 'required'
         ]);
 
         $proyecto = new Proyecto();
         $proyecto->Nom_proyecto = $request->Nom_proyecto;
         $proyecto->Tiempo_inicio = $request->Tiempo_inicio;
         $proyecto->Tiempo_final = $request->Tiempo_final;
         $proyecto->save();
 
         return response()->json([
             "status" => 1,
             "msg" => "¡Registro de proyecto exitoso!",
         ]);
    }

    public function update(Request $request, $id)
    {
        $proyecto = Proyecto::findOrFail($request->id);
        $proyecto->Nom_proyecto = $request->Nom_proyecto;
        $proyecto->Tiempo_inicio = $request->Tiempo_inicio;
        $proyecto->Tiempo_final = $request->Tiempo_final;
        $proyecto->save();
        return $proyecto;
    }

    public function destroy(Request $request,$id)
    {
      $proyecto = Proyecto::destroy($request->id);
      return $proyecto;
    }
}
