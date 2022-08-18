<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::middleware('auth')
    ->namespace('Admin')
    ->name('admin.')
    ->prefix('admin')
    ->group(function () {
        Route::get('/', 'HomeController@index')->name('home');
        Route::resource('/users', 'UserController');
        Route::resource('/products', 'ProductController');
        Route::resource('/restaurants', 'RestaurantController');
        Route::resource('/orders', 'OrderController');
    });

//CONTROLLER PER VISUALIZZARE L'ORDINE DELL'UTENTE
Route::resource('/orders', 'OrderController');

Route::get("{any?}", function () {
    return view("guest.home");
})->where("any", ".*");
