<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TareasController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Plantilla', function () {
    return view('plantilla');
});

Route::get('/tareas', function () {
    return view('Interfaces.TituloTarea');
})->name('titulo');;

Route::post('/tareas',[TareasController::class,'store'])->name('titulo');

