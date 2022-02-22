<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\RadnikController;
use App\Http\Controllers\API\StrukaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
    GET /radniks - vrati sve radnike iz baze - index
    GET /radniks/{id} - vrati radnika sa datim id - jem iz baze - show
    POST /radniks - kreiraj novog radnika u bazi na osnovu podataka iz tela zahteva - store
    PUT /radniks/{id} - izmeni radnika sa id -jem na osnovu podataka iz tela zahteva - update
    DELETE /radniks/{id} - obrisi iz baze radnika sa datim id - jem - destroy

*/

Route::apiResource('radniks', RadnikController::class);
Route::apiResource('strukas', StrukaController::class);
