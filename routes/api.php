<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerroController;
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

Route::post('registrarPerro',[PerroController::class, 'registrarPerro']);
Route::get('listarAllPerros',[PerroController::class, 'listarAllPerros']);
Route::put('actualizarPerro',[PerroController::class, 'actualizarPerro']);
Route::delete('eliminarPerro',[PerroController::class, 'eliminarPerro']);
Route::get('listarUnPerro',[PerroController::class, 'listarUnPerro']);
Route::get('perroRandom',[PerroController::class, 'perroRandom']);
Route::get('perrosCandidatos',[PerroController::class, 'perrosCandidatos']);
Route::post('registrarInteraccion', [PerroController::class, 'registrarInteraccion']);


