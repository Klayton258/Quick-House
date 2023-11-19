<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\MobileController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/houses', [MobileController::class, 'houses']);

Route::get('/house/{id}', [MobileController::class, 'show']);

Route::post('/create/user',[ClientController::class, 'signup']);

Route::post('/login/user',[ClientController::class, 'loginUser']);
