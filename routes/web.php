<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CastController;
use App\Http\Controllers\TableController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('register', [AuthController::class, 'register']);
Route::post('welkom', [AuthController::class, 'welkom']);
Route::get("table", [TableController::class, "get_table"]);
Route::get("data-table", [TableController::class, "get_dataTable"]);

Route::get('/cast',[CastController::class,'index']);
Route::get('/cast/create',[CastController::class,'create']);
Route::post('/cast',[CastController::class,'store']);
Route::get('/cast/{cast_id}',[CastController::class,'show']);
Route::get('/cast/{cast_id}/edit',[CastController::class,'edit']);
Route::put('/cast/{cast_id}',[CastController::class,'update']);
Route::delete('/cast/{cast_id}',[CastController::class,'destroy']);