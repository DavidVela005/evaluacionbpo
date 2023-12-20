<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\TareasController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[TareasController::class, 'index'])->name('hometareas');
Route::get('/registrotareas', [TareasController::class, 'create'])->name('registrotareas');
Route::post('/store-tareas', [TareasController::class, 'store'])->name('store-tareas');
Route::get('/edit-tareas/{id}', [TareasController::class, 'edit'])->name('edit-tareas');
Route::post('/update-tareas/{id}', [TareasController::class, 'update'])->name('update-tareas');
Route::get('/destroy-tareas/{id}', [TareasController::class, 'destroy'])->name('destroy-tareas');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
