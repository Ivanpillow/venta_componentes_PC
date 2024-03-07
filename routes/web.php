<?php

use App\Http\Controllers\VentaController;
use App\Http\Controllers\SitioController;
use App\Models\Venta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/info/{tipo?}', [SitioController::class,'info']);

Route::resource('venta', VentaController::class);

Route::get('/test', function () {
    return view('ventas/ventaCreate');
  });

  Route::get('/index', function () {
    return view('ventas/ventaIndex');
  });

Route::get('/venta/create', [VentaController::class,'create']);

Route::get('/venta/{venta}', [VentaController::class,'show'])->name('venta.show');

Route::delete('/venta/{venta}', [VentaController::class, 'destroy'])->name('venta.destroy');