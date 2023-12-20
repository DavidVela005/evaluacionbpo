@extends('layouts.tareas.principal')
@section('content')


    <div class="row">
    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    </div>


<div class="content p-5">
    <div class="card p-5">
        <div class="container">
            <div class="row">
                <form action="{{route('store-tareas')}}" method="POST">
                    @csrf
                    <div class="form-group p-3">
                    <label for="">DNI</label>
                    <input type="text" class="form-control" id="DNI" name="DNI" placeholder="DNI">
                    </div>
                    <div class="form-group p-3">
                    <label for="">Título</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título">
                    </div>
                    <div class="form-group p-3">
                        <label for="">Descripción</label>
                        <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Título">
                    </div>
                    <div class="form-group p-3 col-2">
                        <label for="">Fecha de Vencimiento</label>
                        <input type="date" class="form-control" id="fecha_vencimiento" name="fecha_vencimiento" placeholder="Título">
                    </div>
                
                    <div class="card p-3">
                        <div class="input-group p-3">
                            <div class="p-3">
                                <button type="submit" class="btn btn-primary">Registrar</button>
                            </div>
                            <div class="p-3">
                                <a href="{{route('hometareas')}}" class="btn btn-primary">Regresar</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection    