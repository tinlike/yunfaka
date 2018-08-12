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
Route::namespace('Admin')->group(function () {
    Route::get('/', 'IndexController@index')->name('index');
    Route::post('/', 'IndexController@buy')->name('buy');
    Route::get('/goods', 'GoodsController@index')->name('goods.index');
    Route::get('/goods/{id}', 'GoodsController@show')->name('goods.show');
    Route::get('categories', 'CategoryController@index');
    Route::post('categories', 'CategoryController@store');
    Route::delete('categories/{id}', 'CategoryController@destroy');
    Route::get('categories/create', 'CategoryController@create');

    Route::get('member', 'UserController@index');

    Route::get('secrets', 'SecretController@index');

    Route::get('orders', 'OrderController@index');
});
