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

Route::get('/', 'PagesController@index');
Route::get('proyecto-desarrollo-web-le-garraf', 'PagesController@legarraf');
Route::get('proyecto-desarrollo-web-marsala', 'PagesController@marsala');
Route::get('proyecto-branding-boreal', 'PagesController@boreal');
Route::get('proyecto-desarrollo-web-transpadex', 'PagesController@transpadex');
Route::get('proyecto-desarrollo-web-pistones', 'PagesController@pistones');
Route::get('proyecto-desarrollo-web-wood-and-stone', 'PagesController@wys');
Route::get('proyecto-desarrollo-web-gyb', 'PagesController@gyb');
Route::get('proyecto-branding-selcon', 'PagesController@selcon');
Route::post('sendmail', 'PagesController@sendmail');
