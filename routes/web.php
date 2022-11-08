<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HouseAdminController;
use App\Http\Controllers\UserAdminController;
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

// MANAGE USERS
Route::get('/dashboard/manageUsers', [UserAdminController::class,'manageUsers'])->name('manageUsers');

Route::get('/dashboard/newUser', [UserAdminController::class,'newUser'])->name('newUser');

Route::post('/dashboard/createUser', [UserAdminController::class,'createUser'])->name('createUser');


Route::get('/dashboard/manageHouses', [HouseAdminController::class,'manageHouses'])->name('manageHouses');

Route::get('/dashboard/viewHouse/{id}', [HouseAdminController::class,'viewHouse'])->name('viewHouse');

Route::get('/dashboard/cretehouse', [HouseAdminController::class,'createhouse'])->name('createhouse');

Route::post('/dashboard/newhouse', [HouseAdminController::class,'newhouse'])->name('newhouse');

Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);

Route::get('/login', [AuthController::class, 'login'])->name('Login');

Route::get('/registration', [AuthController::class, 'registration'])->name('registration');

Route::post('/registration-user', [AuthController::class, 'registrationUser'])->name('registration.user');

Route::post('/login-user', [AuthController::class, 'loginUser'])->name('login.user');

Route::get('/logout', [AuthController::class, 'logOut'])->name('logout.user');
