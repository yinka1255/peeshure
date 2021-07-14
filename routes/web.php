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

Route::get('storage/categories/{filename}', function ($filename)
{
    $path = storage_path('app/public/categories/' . $filename);

    if (!File::exists($path)) {
        abort(404);
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});
Route::get('storage/products/{filename}', function ($filename)
{
    $path = storage_path('app/public/products/' . $filename);

    if (!File::exists($path)) {
        abort(404);
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});

//General Routes
Route::get('/', 'UsersController@index');
Route::get('/submit', 'ProductsController@submit');
Route::get('/terms', 'UsersController@terms');
Route::get('/licence', 'UsersController@licence');
Route::get('/privacy', 'UsersController@privacy');
Route::get('/faqs', 'UsersController@faqs');
Route::get('/contact', 'UsersController@contact');
Route::get('/quality', 'UsersController@quality');
Route::post('/contact_new', 'UsersController@contactNew');
Route::post('/login', 'LoginsController@authenticate');
Route::post('/register', 'UsersController@register');
Route::get('/profile', 'UsersController@profile');

Route::post('/submit_photo', 'ProductsController@submitPhoto');
Route::post('/update_profile', 'UsersController@updateProfile');

Route::post('/forgot_password', 'UsersController@forgotPassword');


Route::get('/admin/index', 'AdminsController@index');
Route::get('/admin/categories', 'CategoriesController@categories');
Route::post('/admin/new_category', 'CategoriesController@newCategory');
Route::post('/admin/edit_category', 'CategoriesController@editCategory');

Route::get('/explore', 'ProductsController@allProducts');

Route::get('/products/{category_id}/{category_name}', 'ProductsController@categoryProducts');

Route::get('/approve/{id}', 'ProductsController@approve');
Route::get('/disapprove/{id}', 'ProductsController@disapprove');

Route::get('/get_products', ['as' => 'search', 'uses' => 'ProductsController@getProducts']);

Route::post('/searched_products', 'ProductsController@searchedProducts');
Route::post('/download', 'ProductsController@download');
Route::get('/details/{product_id}', 'ProductsController@productDetails');

Route::get('/admin/products', 'ProductsController@products');
Route::get('/admin/user_uploads', 'ProductsController@userUploads');
Route::post('/admin/new_product', 'ProductsController@newProduct');
Route::post('/admin/edit_product', 'ProductsController@editProduct');

Route::get('/logout', 'UsersController@logout');

Route::get('/redirect', 'LoginsController@redirectToProvider');
Route::get('/callback', 'LoginsController@handleProviderCallback');


?>