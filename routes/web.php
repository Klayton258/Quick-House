<?php

use App\Livewire\DetailsComponent;
use App\Livewire\HomeComponent;
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

Route::get('/', function () {
    return view('app');
});

Route::get('/details',DetailsComponent::class)->name('details');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
