<?php

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Route;
//Route::get('test',fucnction);
Route::group(['prefix' => 'admin'], function () {

    Route::get('/login', 'AdminAuth@login');
    Route::post('/login', 'AdminAuth@dologin');
    Route::get('/forgot', 'AdminAuth@forgot');

    config::set('auth.defines', 'admin');
    Route::group(['middleware' => 'admin:admin'], function () {
        Route::get('/', function () {

            return view('admin.home');

        });

        Route::any('/logout', 'AdminAuth@logout');

        Route::get('product','ProductController@product');
        Route::get('addproduct','ProductController@addproductform');
        Route::post('addproduct','ProductController@addproduct');


        Route::get('category','CategoryController@category');
        Route::get('addcategory','CategoryController@addcategoryform');
        Route::post('addcategory','CategoryController@addcategory');



    });


});
