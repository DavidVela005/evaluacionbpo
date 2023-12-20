<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\Api\TareasController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/apitareas',[App\http\Controllers\Api\TareasController::class, 'apiIndex'])->name('apitareas');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
