<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\ReporteController;
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

Route::get('/', [LoginController::class,'login']);

Route::get('/register',[RegisterController::class,'show'] );

Route::post('/register', [RegisterController::class,'register']);
Route::get('/login', [LoginController::class,'show']);
Route::post('/login', [LoginController::class,'login']);

Route::get('/home', [HomeController::class,'index']);
Route::get('/logout', [LogoutController::class,'logout']);

//Route::get('/reserva/{id}', [ReservaController::class,'reserva']);
Route::post('/reserva', [ReservaController::class,'reserva']);
Route::get('/reporte', [ReporteController::class,'reporte']);

