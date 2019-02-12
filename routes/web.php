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

Route::get('/home', 'ProductViewController@productsview');
Route::get('/product/{id}', 'ProductViewController@productview')->name('product');
Route::post('/product/{id}', 'ProductViewController@addcomment')->name('comment');
Route::get('/category/{id}', 'CategoryController@categoryview')->name('cat');
//Route::get('/test/{id}', 'CategoryController@categoryview');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
