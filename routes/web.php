<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', ['uses'=>'App\Http\Controllers\ProductsController@index', "as"=> "homePage"]);

Route::get('/product/addToCart/{id}',['uses'=>'App\Http\Controllers\ProductsController@addProductToCart','as'=>'AddToCartProduct']);

Route::get('/cart', ['uses'=>'App\Http\Controllers\ProductsController@showCart', "as"=> "cartproducts"]);

Route::get('/product/deleteCartItem/{id}',['uses'=>'App\Http\Controllers\ProductsController@deleteCartItem','as'=>'DeleteCartItem']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
