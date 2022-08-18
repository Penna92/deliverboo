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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

//CONTROLLER PER VISUALIZZARE LE TIPOLOGIE E I RISTORANTI IN HOME
Route::get('/types', 'Api\TypeController@index');
Route::get('/restaurants', 'Api\HomeController@index');

//CONTROLLER PER VISUALIZZARE IL SINGOLO RISTORANTE
Route::get('/restaurants/{slug}', 'Api\HomeController@show');

//CONTROLLER PER VISUALIZZARE LE CATEGORIE NEL MENU
Route::get('/categories', 'Api\CategoryController@index');

//CONTROLLER PER VISUALIZZARE I PRODOTTI NEL MENU
Route::get('/products', 'Api\HomeController@index');

//CONTROLLER PER INVIARE DATI CARRELLO AL BACKEND
Route::post('api/orders', 'OrderController@getCartData');
