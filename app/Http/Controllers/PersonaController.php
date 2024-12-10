<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PersonaController extends Controller
{
    public  function index () {
        $data = DB::select('select * from personas');
        return view('crud')->with('data', $data);
    }

    public function create(Request $request)
    {
        $sql = DB::insert("insert into personas(nombre,apellido,edad)values(?,?,?)",[
            $request->txtNombre,
            $request->txtApellido,
            $request->txtEdad
        ]);

        if($sql==true){
            return back()->with("correcto", 'insertado');
        }else{
            return back()->with("incorrecto", 'error');
        }
    }

   

    public function detroy($id)
    {
        $sql=DB::delete("delete from personas where id=$id");

        if($sql)
        {
            if($sql==true){
                return back()->with("correcto", 'Borrado');
            }else{
                return back()->with("incorrecto", 'error');
            }
        }
    }

}
