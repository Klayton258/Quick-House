<?php

use App\Http\Controllers\MobileApiController;
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

Route::namespace('Api')->name('api.')->group(function () {

    // MANAGE HOUSE ROUTES-------------------------------------------------------------------------------------
    Route::prefix('houses')->group(function () {
        Route::get('/', 'HouseController@index')->name('houses');
        Route::post('/newhouse', 'HouseController@newhouse');
        Route::get('/house/{id}', 'HouseController@housebyid');
        Route::delete('/delete/{id}', 'HouseController@delete');
    });

});

Route::get('/houses', [MobileApiController::class, 'houses']);

Route::get('/house/{id}', [MobileApiController::class, 'show']);

Route::post('/create/user',[MobileApiController::class, 'createUser']);

Route::post('/login/user',[MobileApiController::class, 'loginUser']);
