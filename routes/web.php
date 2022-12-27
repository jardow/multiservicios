<?php

use App\Http\Controllers\AcercadeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\PortadaController;



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
require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth','verified'])->name('dashboard');


//Controlladores para Admin
Route::prefix('/administrador')->group(function (){
    Route::resource('/panel', AdminController::class);
    Route::resource('/servicios', ServicioController::class)->names('servicio');
    Route::resource('/proyectos', ProyectoController::class)->names('proyecto');
    Route::resource('/equipo', EquipoController::class)->names('equipo');
    Route::resource('/portada', PortadaController::class)->names('portada');
    Route::resource('/acercade', AcercadeController::class)->names('acercade');
});


//Controlladores para Cliente
/*
Route::prefix('/')->group(function (){
    Route::resource('/servicios', ClienteController::class);
});
*/


