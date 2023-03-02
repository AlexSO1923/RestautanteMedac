<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\HorariosController;
use App\Http\Controllers\ReservassController;

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
    return view('index');
});
Route::get('/ReservaTotal', function () {
    return view('reservatotal');
});
Route::get('/Reservafecha', function () {
    return view('reservaFecha');
});
Route::get('/Reservahoras', function () {
    return view('reserva2');
});
Route::get('/Reserva3', function () {
    return view('reserva3');
});
Route::get('/Reserva4', function () {
    return view('reserva4');
});
Route::get('/Carta', function () {
    return view('carta');
});
Route::get('/Ubi', function () {
    return view('Ubicacion');
});
Route::get('/IniciarSesion', function () {
    return view('auth.login');
});
Route::get('/Registro', function () {
    return view('auth.register');
});
Route::get('/Contacto', function () {
    return view('Registrarse1');
});
Route::get('/misreserva', function () {
    return view('Lista');
});
Route::get('/Multi', function () {
    return view('multi');
});
Route::get('/Call', function () {
    return view('reservaFullCall');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

Route::get('/Contacto', [ContactoController::class, 'index']);
Route::post('/Ubi', [ContactoController::class, 'store']);

Route::get('/listaReserva1', [ReservassController::class, 'showAll'])->middleware('auth');
// Route::post('/mireserva1', [ReservassController::class, 'agregar'])

// Route::post('/mireserva1', [ReservassController::class, 'recogerHoras']);
// Route::get('/mireserva1', [ReservassController::class, 'recogerDatos']);

// Route::get('/mireserva2/{id}', [ReservassController::class, 'mostrarfecha']);
// Route::get('/invitadoreserva2/{id}', [ReservassController::class, 'mostrarfechainvitado']);

Route::get('/mireserva3', [ReservassController::class, 'recogerDatos']);
Route::post('/mireserva3', [ReservassController::class, 'store']);

Route::get('/mireserva4', function () {
    return view('reservatotal');
});

Route::post('/mireserva4', [ReservassController::class, 'storeInvitado']);
Route::post('/reservaid', [ReservassController::class, 'storeid']);

// Route::get('/mireserva5', [ReservassController::class, 'recogerDatos']);

Route::delete('misreserva/{id}',[ReservassController::class, 'delete'])->name('reserva.delete');


Route::get('/FullCall', [ReservassController::class, 'Evento']);
Route::get('/FullCallAjax', [ReservassController::class, 'Eventoajax']);
// Route::get('reserva/detalles', [ReservassController::class,'detalles'])->name('reserva.detalles');
// Route::get('reserva/detalles', 'ReservassController@detalles')->name('reserva.detalles');


