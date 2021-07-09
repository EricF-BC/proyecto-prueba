<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PagesController extends Controller
{
    public function autor(){
        return view('Autor.autor');
    }

    public function verAutor(){
        $autor = App\Autor::all();
        return view ('Autor.autor',compact('autor'));
    }
    public function crearAutorVista(){
        return view('Autor.crearAutor');
    }
    public function crearAutor(Request $request){

        //  Validacion por laravel
        // $request->validate([
        //     'nombre' => 'required',
        //     'apellidoPaterno' => 'required',
        //     'apellidoMaterno' => 'required',
        //     'edad' => 'required',
        //     'descripcion' => 'required',
        // ]);

        $nuevoAutor = new App\Autor;
        $nuevoAutor-> nombre = $request->nombre;
        $nuevoAutor-> apellidoPaterno = $request->apellidoP;
        $nuevoAutor-> apellidoMaterno = $request->apellidoM;
        $nuevoAutor-> edad = $request->edad;
        $nuevoAutor-> descripcion = $request->descripcion;

        $nuevoAutor->save();
        return back()->with('mensaje','Autor Agregado');
    }

    public function eliminarAutor($id){
        $eliminarAutor = App\Autor::findOrFail($id);
        $eliminarAutor->delete();

        return back()->with('mensaje','Autor Eliminado');
    }

    public function editarAutorVista($id){
        $autor = App\Autor::findOrFail($id);
        return view('Autor.editarAutor',compact('autor'));
    }

    public function editarAutor(Request $request, $id){
        $editarAutor = App\Autor::findOrFail($id);
        $editarAutor-> nombre = $request->nombre;
        $editarAutor-> apellidoPaterno = $request->apellidoP;
        $editarAutor-> apellidoMaterno = $request->apellidoM;
        $editarAutor-> edad = $request->edad;
        $editarAutor-> descripcion = $request->descripcion;

        $editarAutor->save();
        return back()->with('mensaje', 'Autor Actualizado');
    }
}
