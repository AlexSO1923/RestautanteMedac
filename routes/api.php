<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ReservaController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(ReservaController::class)->group(function(){
    Route::get('/misReservas','consultarReservas')->middleware('auth:sanctum');
    Route::get('/reservas','consultarReservasTotal');
    Route::get('/menus','consultarMenuTotal');
    Route::get('/mesas','consultarMesaTotal');
    Route::get('/usuario','consultarUsuarioTotal');
    Route::get('/horario','consultarHorarioTotal');
    Route::post('/reservaN','insertarReservaNueva');
    Route::post('/misReservas','insertarReserva')->middleware('auth:sanctum');
    Route::get('/misReservas/{id}','show');
    Route::put('/misReservas/{id}','actualizarReserva');
    Route::delete('/misReservas/{id}','borrarReserva');
});

Route::post('/auth/register', [AuthController::class, 'createUser']);
Route::post('/auth/login', [AuthController::class, 'loginUser']);
