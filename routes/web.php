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

Route::get('/', 'FrontendController@home');

Route::get('/Json', 'FrontendController@sendJson');

Route::get('/redirect', 'FrontendController@redirect');


Route::get('/product', 'FrontendController@product');

Route::get('/location', 'FrontendController@location');
