<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HouseAdminController;
use App\Http\Controllers\UserAdminController;
use App\Http\Livewire\CategComponent;
use App\Http\Livewire\SearchComponent;
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
Route::get('/dashboard/login', [UserAdminController::class,'loginView'])->name('admin.login');

Route::post('/dashboard/validate/login', [UserAdminController::class,'login'])->name('admin.login.validate');

Route::group(['prefix'=>'dashboard', 'middleware'=> ['auth:admin']], function(){

    Route::get('/home', 'AdminController@index')->name('admin');

    Route::get('/logout', [UserAdminController::class, 'logout'])->name('admin.logout');

    // MANAGE USERS
    Route::get('/manageUsers', [UserAdminController::class,'manageUsers'])->name('manageUsers');

    Route::get('/newUser', [UserAdminController::class,'newUser'])->name('newUser');

    Route::post('/createUser', [UserAdminController::class,'createUser'])->name('createUser');

    // MANAGE HOUSES
    Route::get('/manageHouses', [HouseAdminController::class,'manageHouses'])->name('manageHouses');

    Route::get('/viewHouse/{id}', [HouseAdminController::class,'viewHouse'])->name('viewHouse');

    Route::get('/cretehouse', [HouseAdminController::class,'createhouse'])->name('createhouse');

    Route::post('/newhouse', [HouseAdminController::class,'newhouse'])->name('newhouse');

});

Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);

Route::get('/login', [AuthController::class, 'login'])->name('Login');

Route::get('/registration', [AuthController::class, 'registration'])->name('registration');

Route::post('/registration-user', [AuthController::class, 'registrationUser'])->name('registration.user');

Route::post('/login-user', [AuthController::class, 'loginUser'])->name('login.user');

Route::get('/logout', [AuthController::class, 'logOut'])->name('logout.user');

Route::get('/house-category/{slug}',[CategComponent::class, 'render'])->name('house.category');
// Route::get('/house-category/{slug}',CategComponent::class)->name('house.category');

Route::get('/search',[SearchComponent::class, 'render'])->name('house.search');
