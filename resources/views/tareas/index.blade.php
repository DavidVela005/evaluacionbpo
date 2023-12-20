@extends('layouts.tareas.principal')

@section('content')

<div class="card p-3 pt-5">
    <table class="table table-striped mt-2" id="usuarios">
        <thead class="bg-info">
          <tr>
            <th scope="col">Id</th>
            <th scope="col">DNI</th>
            <th scope="col">Titulo</th>
            <th scope="col">Descripción</th>
            <th scope="col">F. De Vencimiento</th>
            <th scope="col">Estado</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($tareas as $value)
            <tr>
                <td>{{$value->id}}</td>
                <td>{{$value->DNI}}</td>
                <td>{{$value->titulo}}</td>
                <td>{{$value->descripcion}}</td>
                <td>{{$value->fecha_vencimiento}}</td>
                <td>{{$value->nombre}}</td>
                <td>
                    <a class="btn btn-info" href="{{route('edit-tareas', $value->id)}}">Editar</a>
                </td>
                <td>
                    <a class="btn btn-danger" href="{{route('destroy-tareas', $value->id)}}">Eliminar</a>
                </td>
            </tr>    
            @endforeach
            
        </tbody>


    </table>
</div>
<div class="card text-center">
    <div class="input-group">
        <div class="p-2">
            <a class="btn btn-info" href="{{route('registrotareas')}}">Nuevo</a>
        </div>
    </div>
</div>
@endsection