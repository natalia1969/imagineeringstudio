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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('categories', 'CategoryController@index')->name('categories');

Route::put('categories/{category}', 'CategoryController@edit')->name('categoryUpdate');

Route::delete('categories/{category}', 'CategoryController@delete')->name('deleteCategory');

Route::post('categories', 'CategoryController@createCategory')->name('createCategory');


Route::get('categories/{category}', 'ProductController@index')->name('products');
//Route::get('categories/{category}', 'CategoryController@product')->name('products');

