<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', ['uses'=>'App\Http\Controllers\ProductsController@index', "as"=> "homePage"]);

Route::get('/product/addToCart/{id}',['uses'=>'App\Http\Controllers\ProductsController@addProductToCart','as'=>'AddToCartProduct']);

Route::get('/cart', ['uses'=>'App\Http\Controllers\ProductsController@showCart', "as"=> "cartproducts"]);

Route::get('/product/deleteCartItem/{id}',['uses'=>'App\Http\Controllers\ProductsController@deleteCartItem','as'=>'DeleteCartItem']);



