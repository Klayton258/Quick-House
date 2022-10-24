<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HouseAdminController;
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



Route::get('/', 'Controller@index')->name('home');

Route::get('/house/{id}', 'Controller@house')->name('house');

Route::get('/contact', 'Controller@contact')->name('contact');





// ================================== ADMIN ROUTES =========================
Route::get('/dashboard/home', 'AdminController@index')->name('admin');

Route::get('/dashboard/cretehouse', [HouseAdminController::class,'createhouse'])->name('createhouse');

Route::post('/dashboard/newhouse', [HouseAdminController::class,'newhouse'])->name('newhouse');
