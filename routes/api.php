<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\VacacioneController;
use App\Http\Controllers\CarreraController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ContratoController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\GeneracionController;
use App\Http\Controllers\TarjetaController;
use App\Http\Controllers\TipoUsuarioController;
use App\Http\Controllers\UniinsController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\ExtensionController;
use App\Http\Controllers\CiudadController;
use App\Models\Vacacione;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource("v1/users",UserController::class);

Route::apiResource("v1/usuarios",UsuarioController::class);

Route::apiResource("v1/carreras",CarreraController::class);

Route::apiResource("v1/uniins",UniinsController::class);

Route::apiResource("v1/generacions",GeneracionController::class);

Route::apiResource("v1/tarjetas",TarjetaController::class);

Route::apiResource("v1/tipousuarios",TipoUsuarioController::class);

Route::apiResource("v1/areas",AreaController::class);

Route::apiResource("v1/personals",PersonalController::class);

Route::apiResource("v1/estudiantes",EstudianteController::class);

Route::apiResource("v1/extensions",ExtensionController::class);

Route::apiResource("v1/ciudads",CiudadController::class);

Route::apiResource("v1/items",ItemController::class);

Route::apiResource("v1/vacaciones",VacacioneController::class);

Route::apiResource("v1/contratos",ContratoController::class);

Route::post("v1/usuarios/login", [UsuarioController::class, 'login']);
