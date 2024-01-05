<?php

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

Route::get('movies', [\App\Http\Controllers\API\DataController::class,'fetchAllDataMovies']);
Route::get('tv', [\App\Http\Controllers\API\DataController::class,'fetchAllDataTv']);

Route::get('get_data_all', [\App\Http\Controllers\API\DataController::class,'get_all_data_fireabase']);
Route::get('get_data_movies', [\App\Http\Controllers\API\DataController::class,'get_data_movies']);
Route::get('get_data_tv', [\App\Http\Controllers\API\DataController::class,'get_data_tv']);

