<?php

use App\Http\Controllers\Api\V1\AulaController;
use App\Http\Controllers\Api\V1\DepartamentoController;
use App\Http\Controllers\Api\V1\EspecialidadController;
use App\Http\Controllers\Api\V1\ModuloController;
use App\Http\Controllers\Auth\LoginRegisterController;
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

Route::middleware('auth:sanctum')->group(function () {

    Route::prefix('v1')->middleware('auth:sanctum')->group(function () {
        Route::apiResource('modulos', ModuloController::class)->missing(function (Request $request) {
            return response()->json(['error' => 'Modulo not found'], 404);
        });

        Route::apiResource('especialidad', EspecialidadController::class)->missing(function (Request $request) {
            return response()->json(['error' => 'Especialidad not found'], 404);
        });

        Route::apiResource('departamento', DepartamentoController::class)->missing(function (Request $request) {
            return response()->json(['error' => 'Departamento not found'], 404);
        });

        Route::apiResource('aula', AulaController::class)->missing(function (Request $request) {
            return response()->json(['error' => 'Aula not found'], 404);
        });
    });
});

Route::controller(LoginRegisterController::class)->group(function () {
    Route::post('/register', 'register');
    Route::post('/login', 'login');
    Route::delete('/logout', 'logout');
});
