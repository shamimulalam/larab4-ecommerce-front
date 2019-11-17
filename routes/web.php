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


Route::get('/','HomeController@index')->name('home');
Route::get('{category-id}','HomeController@category')->name('category.product');
Route::get('product/{id}/details','HomeController@product_details')->name('product.details');
Route::get('checkout','CheckoutController@cart')->name('checkout');
Route::get('checkout/submit','CheckoutController@checkout')->name('checkout.submit');
Route::get('quick/view/{id}','HomeController@quick_view')->name('quick.view');
