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
Route::get('proyecto-social-media-grill-point', 'PagesController@grillpoint');
Route::get('proyecto-social-media-la-cura', 'PagesController@lacura');
Route::get('proyecto-desarrollo-web-pistones', 'PagesController@pistones');
Route::post('sendmail', 'PagesController@sendmail');
