<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix('/pacientes')->group(function () {
 
    Route::get('/',[ PacientesController::class, 'get']);
    Route::post('/',[ PacientesController::class, 'create']);
    Route::put('/{id}',[ PacientesController::class, 'update']);
    //Route::delete('/{id}',[ PersonaController::class, 'delete']);

 });

 Route::prefix('/profesionales')->group(function () {
 
    Route::get('/',[ ProfesionalesController::class, 'get']);
    Route::post('/',[ ProfesionalesController::class, 'create']);
    Route::put('/{id}',[ ProfesionalesController::class, 'update']);
    //Route::delete('/{id}',[ PersonaController::class, 'delete']);

 });