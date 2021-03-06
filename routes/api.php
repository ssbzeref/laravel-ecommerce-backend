<?php

use Illuminate\Http\Request;

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

// require 'admin.php';

Route::middleware('auth:/api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::apiResources([
    'products' => 'API\ProductController'
]);



Route::get('findProduct', 'API\ProductController@search');
Route::get('countProduct', 'API\ProductController@category');
Route::get('export', 'API\ProductController@export');
Route::get('getProduct/{id}', 'API\ProductController@getProducts');



Route::apiResources([
    'orders' => 'API\OrderController'
]);
Route::get('orderCount', 'API\OrderController@orderCount');


// Route::post('/post/create', 'PostController@store');
// Route::get('/products/edit/{id}', 'API\ProductController@edit');
// Route::post('/products/update/{id}', 'API\ProductController@update');
// Route::delete('/products/delete/{id}', 'API\ProductController@delete');
// Route::get('/posts', 'PostController@index');


Route::apiResources([
    'suppliers' => 'API\SupplierController'
]);

Route::get('getSupplier/{id}', 'API\SupplierController@getSupplier');
Route::get('/searchP', 'API\SearchController@search');
