<?php

use App\Http\Controllers\ModificarController;
use App\Http\Controllers\PersonaController;
use Illuminate\Support\Facades\Route;

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

Route::get('/crud', [PersonaController::class, 'index']);
Route::post('/agregar', [PersonaController::class, 'create'])->name('crud.create');
Route::get('/borrar-{id}', [PersonaController::class, 'detroy'])->name('crud.delete');

//Modificar
Route::get('/Modificar-{id}', [ModificarController::class, 'index'])->name('crud.verUpdate');
Route::put('/actualizar-{id}', [ModificarController::class, 'update'])->name('crud.update');