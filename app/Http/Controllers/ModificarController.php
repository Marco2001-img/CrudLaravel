<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ModificarController extends Controller
{
    public function index($id)
{
    // Obtener los datos de la persona por el ID
    $persona = DB::table('personas')->where('id', $id)->first();

    // Pasar los datos a la vista
    return view('Modificar', compact('persona'));
   //return view('Modificar');
}


    public function update(Request $request, $id)
    {
        try {
            // Actualizar el registro en la base de datos
            $sql = DB::table('personas')
                    ->where('id', $id)
                    ->update([
                        'nombre' => $request->txtNombre,
                        'apellido' => $request->txtApellido,
                        'edad' => $request->txtEdad,
                    ]);
        } catch (\Throwable $th) {
            // Manejo de errores
            $sql = 0;
        }
    
        if ($sql) {
            return back()->with('correcto', 'Actualizado con éxito');
        } else {
            return back()->with('incorrecto', 'Error al actualizar');
        }
    }
    

}
