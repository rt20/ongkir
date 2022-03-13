<?php

use App\Http\Controllers\CheckoutController;

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
// Route::get('/', 'getApiRajaOngkirController@index');
// Route::get('/getCity/ajax/{id}', 'getApiRajaOngkirController@getCitiesAjax');

Route::get('/',[CheckoutController::class,'index']);
Route::get('/getCity/ajax/{id}', 'App\Http\Controllers\CheckoutController@getCitiesAjax');
// Route::get('/', function () {
//     return view('welcome');
//     // Route::get('/','CheckoutController@index');
//     // Route::get('checkout', CheckoutController::class);
    
// });
