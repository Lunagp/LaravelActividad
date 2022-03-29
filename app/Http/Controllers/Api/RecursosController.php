<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Recursos;
class RecursosController extends Controller
{
    public function index(){
        $recursos = Recursos::all();
        return $recursos;
    }

    public function store(Request $request){
        $request->validate([
            'Nom_recursos'=> 'required',
            'tipo'=> 'required',
         ]);
 
         $recursos = new Recursos();
         $recursos->Nom_recursos = $request->Nom_recursos;
         $recursos->tipo = $request->tipo;
         $recursos->save();
 
         return response()->json([
             "status" => 1,
             "msg" => "¡Registro de recurso exitoso!",
         ]);
    }

    public function update(Request $request, $id)
    {
        $recursos = Recursos::findOrFail($request->id);
        $recursos->Nom_recursos = $request->Nom_recursos;
        $recursos->tipo = $request->tipo;
        $recursos->save();
        return $recursos;
    }

    public function destroy(Request $request,$id)
    {
      $recursos = Recursos::destroy($request->id);
      return $recursos;
    }
}
