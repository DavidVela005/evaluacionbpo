<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tareas;
use Validator;

class TareasController extends Controller
{
    public function index()
    {
        $tareas = Tareas::join('estado_tareas', 'estado_tareas.id', '=', 'tareas.id_estado_tareas')
                        ->where('id_estado_tareas', '<>', '4')
                        ->get();
        return view('tareas.index',compact('tareas'));
    }
    public function create()
    {
        return view('tareas.create');
    }

    public function store(Request $request)
    {
        $tareas = new Tareas();

        $rules =
        [
            'DNI' => 'required|unique:tareas,DNI',
            'titulo' =>'required',
            'descripcion'=> 'required',
            'fecha_vencimiento'=>'required'
        ];

        $messages =
        [
            'DNI.required' => 'El campo DNI es requerido.',
            'DNI.unique' => 'El campo DNI ya existe en la base de datos',
            'titulo.required' => 'El Titulo  es requerido.',
            'descripcion.required' => 'El campo Descripcion es requerido.',
            'fecha_vencimiento.required' => 'El campo Fecha de Vencimiento es requerido.',
        ];
        
        $this->validate($request,$rules, $messages);
        
        $tareas->DNI = $request->input('DNI'); 
        $tareas->titulo = $request->input('titulo'); 
        $tareas->descripcion = $request->input('descripcion'); 
        $tareas->fecha_vencimiento = $request->input('fecha_vencimiento');
        $tareas->id_estado_tareas = '1';
        $tareas->save();
    
        return redirect()->route('hometareas')->with('Success', "Tarea registrada de manera correcta");
    }

    public function edit(Request $request)
    {
        $tareas = Tareas::find($request->id);
        return view('tareas.edit', compact('tareas'));
    }

    public function update(Request  $request)
    {
        $tareas = Tareas::find($request->id);

        $rules =
        [
            'DNI' => 'required|unique:tareas,DNI', $request->id,
            'titulo' =>'required',
            'descripcion'=> 'required',
            'fecha_vencimiento'=>'required'
        ];

        $messages =
        [
            'DNI.required' => 'El campo DNI es requerido.',
            'DNI.unique' => 'El campo DNI ya existe en la base de datos',
            'titulo.required' => 'El Titulo  es requerido.',
            'descripcion.required' => 'El campo Descripcion es requerido.',
            'fecha_vencimiento.required' => 'El campo Fecha de Vencimiento es requerido.',
        ];

        $this->validate($request,$rules, $messages);
        
        $tareas->DNI = $request->input('DNI'); 
        $tareas->titulo = $request->input('titulo'); 
        $tareas->descripcion = $request->input('descripcion'); 
        $tareas->fecha_vencimiento = $request->input('fecha_vencimiento');
        $tareas->id_estado_tareas = '1';
        $tareas->save();

        return redirect()->route('hometareas')->with('Success', "Datos actualzados de manera correcta");

    }

    public function destroy()
    {
        $tareas = Tareas::where("id", request()->id)->first();

        $tareas->id_estado_tareas = 4;
        $tareas->save();

        return redirect()->route("hometareas")->with("Succes", "Registro eliminado de manera correcta");
       
    }
}
