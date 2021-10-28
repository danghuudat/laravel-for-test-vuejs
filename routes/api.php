<?php

use Illuminate\Http\Request;
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



Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {
    Route::group(['prefix' => 'sinhvien'], function ($router){
        Route::get('get-list', [\App\Http\Controllers\SinhVienController::class, 'index']);
        Route::get('show-detail/{id}', [\App\Http\Controllers\SinhVienController::class, 'show']);
    });
    Route::group(['prefix' => 'hocluc'], function ($router){
        Route::get('get-list', [\App\Http\Controllers\HocLucController::class, 'index']);
        //Route::get('show-detail/{id}', [\App\Http\Controllers\HocLucController::class, 'show']);
    });
    Route::post('logout', [\App\Http\Controllers\AuthController::class, 'logout']);
    Route::post('refresh', [\App\Http\Controllers\AuthController::class, 'refresh']);
    Route::post('me', [\App\Http\Controllers\AuthController::class, 'me']);

});
Route::post('auth/login', [\App\Http\Controllers\AuthController::class, 'login']);
