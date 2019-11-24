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
Route::get('product/{product-id}/details','HomeController@product_details')->name('product.details');
Route::get('checkout','CheckoutController@cart')->name('checkout');
Route::get('checkout/submit','CheckoutController@checkout')->name('checkout.submit');
Route::post('payment/success','PaymentController@success')->name('payment.success');
Route::get('payment/confirmation','PaymentController@payment_confirmation')->name('payment.confirmation');
Route::get('payment/{order_id?}','PaymentController@index')->name('payment.index');
