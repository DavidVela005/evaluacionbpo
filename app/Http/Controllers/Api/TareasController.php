<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TareasController extends Controller
{
    //
    public function apiIndex()
    {
        $url = env('APITAREAS', 'http://localhost');
        $response = Http::get($url.'tareas');
        $status = $response->getStatusCode();

        if($status == 200)
        {
            $tareas = $response->json();
            dd($tareas);
            return view('tareas.index', compact('tareas'));
        }else
        {
            return redirect()->route("hometareas")->with("Error", "Error al intentar acceder al back".$status);
        }
    }
}
