<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarea;

class TareasController extends Controller
{
    //metodos:
    //index para mostrar elementos
    //store para guardar una tarea
    //update para actualizar una tarea
    //destroy para eliminar una tarea
    //edit para que muestre un formulario para editar tareas

    public function store(Request $request){
        $request->validate(['Titulo' => 'required|min:3']);
           $tareaController = new Tarea;
           $tareaController->Titulo = $request->Titulo;
           $tareaController->save();
           return redirect()->route('titulo')->with('Completado', 'Tarea añadida');
       }

}
