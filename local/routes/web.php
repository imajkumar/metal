<?php

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
Route::get('/login/{social}','Auth\LoginController@socialLogin')->where('social','twitter|facebook|linkedin|google|github|bitbucket');
Route::get('/login/{social}/callback','Auth\LoginController@handleProviderCallback')->where('social','twitter|facebook|linkedin|google|github|bitbucket');


Route::get('/', 'HomeController@index')->name('home');
Route::get('/product-list', 'HomeController@product_list')->name('product_list');
Route::get('/product-list/{id}/{productname}', 'HomeController@product_list_cat')->name('product_list_cat');

Route::get('/seller-list', 'HomeController@product_seller_list')->name('product_seller_list');
Route::get('/seller-list/{id}/{productname}', 'HomeController@seller_list_cat')->name('seller_list_cat');

Route::get('/product-detail/{id}/{productname}', 'HomeController@getProductDetail')->name('getProductDetail');



Route::post('/product_filer_ajax', 'HomeController@product_filer_ajax')->name('product_filer_ajax');
Route::post('/seller_filter_ajax', 'HomeController@seller_filter_ajax')->name('seller_filter_ajax');



Route::get('/prices', 'HomeController@view_all_prices')->name('view_all_prices');





Route::group(['middleware' => ['auth']], function() {

    Route::resource('roles','RoleController');
    Route::resource('users','UserController');

    Route::resource('products','ProductController');
    Route::get('/{slug}', 'UserController@getUserDashboard')->name('getUserDashboard');


});
