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
// $client = new \GuzzleHttp\Client([
//     'headers' => [ 'Content-Type' => 'application/json' ]
// ]);
//
// $response = $client->post('http://api.metalbaba.local/customer_web_api/login', [
//     GuzzleHttp\RequestOptions::JSON => [
//       'username' => 'ajay@yopmail.com',
//       'password' => '123456',
//       'type' => '2'
//     ]
// ]);
// $login_data=$response->getBody()->getContents();
// print_r($login_data);


// die;


Auth::routes();
Route::get('/login/{social}','Auth\LoginController@socialLogin')->where('social','twitter|facebook|linkedin|google|github|bitbucket');
Route::get('/login/{social}/callback','Auth\LoginController@handleProviderCallback')->where('social','twitter|facebook|linkedin|google|github|bitbucket');


Route::get('/', 'HomeController@index')->name('home');
Route::get('/product-list', 'HomeController@product_list')->name('product_list');
Route::get('/product-list/{id}/{productname}', 'HomeController@product_list_cat')->name('product_list_cat');
Route::get('/seller-list', 'HomeController@product_seller_list')->name('product_seller_list');


Route::group(['middleware' => ['auth']], function() {

    Route::resource('roles','RoleController');
    Route::resource('users','UserController');

    Route::resource('products','ProductController');
    Route::get('/{slug}', 'UserController@getUserDashboard')->name('getUserDashboard');


});
