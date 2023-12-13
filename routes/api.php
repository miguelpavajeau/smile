<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\PacientesController;
use App\Http\Controllers\API\ProfesionalesController;
use App\Http\Controllers\API\CitasController;
use App\Http\Controllers\API\HorariosController;
use App\Http\Controllers\API\AuthController;

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

Route::group(['middleware' => ['cors']], function () {
    //Rutas a las que se permitirá acceso


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

    Route::prefix('/citas')->group(function () {

        Route::get('/',[ CitasController::class, 'get']);
        Route::post('/',[ CitasController::class, 'create']);
        Route::put('/{id}',[ CitasController::class, 'update']);
        //Route::delete('/{id}',[ PersonaController::class, 'delete']);

    });

    Route::prefix('/horarios')->group(function () {

        Route::get('/',[ HorariosController::class, 'get']);
        Route::post('/',[ HorariosController::class, 'create']);
        Route::put('/{id}',[ HorariosController::class, 'update']);
        //Route::delete('/{id}',[ PersonaController::class, 'delete']);

    });

    Route::post('signup',[AuthController::class,'signup']);

    Route::post('login',[AuthController::class,'login']);
});