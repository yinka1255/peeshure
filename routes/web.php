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

//General Routes
Route::get('/', 'UsersController@index');
Route::get('/about', 'UsersController@about');
Route::get('/services', 'UsersController@services');
Route::get('/products', 'UsersController@products');
Route::get('/contact', 'UsersController@contact');
Route::get('login', function () {
    return view('login');
});
Route::get('/logout', 'UsersController@logout');
Route::get('register', function () {
    return view('register');
});
Route::post('/authenticate', 'LoginsController@authenticate');
Route::post('/register_client', 'UsersController@register');
Route::post('/buy_vehicle', 'PoliciesController@buyVehiclePolicy');

Route::get('/admin/index', 'AdminsController@index');
Route::get('/admin/policies', 'PoliciesController@index');
Route::post('/admin/edit_policy', 'PoliciesController@editPolicy');
Route::get('/policies/buy/{policy_id}', 'PoliciesController@buy');

//Route::get('/test_live', 'CardsController@testLiveTopup');
//Route::get('/test_live/{phone}/{network}/{amount}', 'CardsController@sendTopup');

?>