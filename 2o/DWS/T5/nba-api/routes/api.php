<?php

use App\Http\Controllers\api\PlayerController;
use App\Http\Controllers\api\TeamController;
use App\Http\Controllers\LoginController;
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
Route::apiResource('jugadores', PlayerController::class);
Route::apiResource('equipos', TeamController::class);

Route::post('login', [LoginController::class, 'login'])->name('login');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');
Route::post('refreshToken', [LoginController::class, 'refreshToken'])->name('refreshToken');
