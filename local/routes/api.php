<?php

use Illuminate\Http\Request;
Use App\User;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login','UserController@getAPILogin')->name('getAPILogin');
Route::get('/getProductList','HomeController@getProductList')->name('getProductList');
Route::post('/getProductList','HomeController@getProductList')->name('getProductList');


Route::get('/getSellerList','HomeController@getSellerList')->name('getSellerList');
Route::post('/getSellerList','HomeController@getSellerList')->name('getSellerList');


//added alpha
