<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Finalizacion;
class FinalizacionController extends Controller
{
    public function index(){
        $finalizacion = Finalizacion::all();
        return $finalizacion;
    }

    public function store(Request $request){
        $request->validate([
            'Avances'=> 'required',
            'Fecha_avance'=> 'required',
            'Precio'=> 'required',
            'proyecto_id'=> 'required'
         ]);
 
         $finalizacion = new Finalizacion();
         $finalizacion->Avances = $request->Avances;
         $finalizacion->Fecha_avance = $request->Fecha_avance;
         $finalizacion->Precio = $request->Precio;
         $finalizacion->proyecto_id = $request->proyecto_id;
         $finalizacion->save();
 
         return response()->json([
             "status" => 1,
             "msg" => "¡Registro de finalizacion exitoso!",
         ]); 
    }

    public function update(Request $request, $id)
    {
        $finalizacion = Finalizacion::findOrFail($request->id);
        $finalizacion->Avances = $request->Avances;
        $finalizacion->Fecha_avance = $request->Fecha_avance;
        $finalizacion->Precio = $request->Precio;
        $finalizacion->proyecto_id = $request->proyecto_id;
        $finalizacion->save();
        return $finalizacion;
    }

    public function destroy(Request $request,$id)
    {
      $finalizacion = Finalizacion::destroy($request->id);
      return $finalizacion;
    }

}
