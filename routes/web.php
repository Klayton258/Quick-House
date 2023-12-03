<?php

use App\Livewire\DetailsComponent;
use App\Livewire\HomeComponent;
use Brian2694\Toastr\Toastr;use Illuminate\Support\Facades\Route;

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
    Toastr::success('Messages in here', 'Title', ["positionClass" => "toast-top-center"]);

    return view('app') ;
});

Route::get('/details/{id}',DetailsComponent::class)->name('house.details');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
