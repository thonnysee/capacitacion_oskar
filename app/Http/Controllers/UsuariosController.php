<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;
use DB;

class UsuariosController extends Controller
{
    public function crear_usuario(Request $request){
        if(Usuarios::where($request->all())->first()) return response()->json(['mensaje'=> 'Error usuario ya existe', 'codigo' => 401]);
        $usuario = Usuarios::create($request->all());
        return response()->json(['mensaje'=> 'Usuario creado', 'codigo' => 200, 'usuario' => $usuario]);
    }

    public function usuarios(){
        return Usuarios::all();
    }

    public function destroy(Request $request){
        if($request->id && $usuario_a_eliminar = Usuarios::find($request->id)){
            $usuario_a_eliminar->delete();
            return response()->json(['mensaje' => 'Usuario Eliminado', 'codigo' => '201']);
        }
        return response()->json(['mensaje' => 'Peticion mal hecha', 'codigo' => '401']);
    }
}
