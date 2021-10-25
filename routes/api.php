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

Route::get('get-list', [\App\Http\Controllers\SinhVienController::class, 'index']);
Route::get('show-detail/{id}', [\App\Http\Controllers\SinhVienController::class, 'show']);

