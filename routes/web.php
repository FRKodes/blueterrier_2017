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
Route::get('en', 'PagesController@index_en');
Route::get('proyecto-desarrollo-web-le-garraf', 'PagesController@legarraf');
Route::get('en/web-development-le-garraf', 'PagesController@legarraf_en');
Route::get('proyecto-desarrollo-web-marsala', 'PagesController@marsala');
Route::get('en/web-development-ecommerce-marsala', 'PagesController@marsala_en');
Route::get('proyecto-branding-boreal', 'PagesController@boreal');
Route::get('en/branding-project-boreal', 'PagesController@boreal_en');
Route::get('proyecto-desarrollo-web-transpadex', 'PagesController@transpadex');
Route::get('en/web-development-transpadex-logistics', 'PagesController@transpadex_en');
Route::get('proyecto-desarrollo-web-pistones', 'PagesController@pistones');
Route::get('en/web-development-pistones-garage', 'PagesController@pistones_en');
Route::get('proyecto-desarrollo-web-wood-and-stone', 'PagesController@wys');
Route::get('en/web-development-wood-and-stone', 'PagesController@wys_en');
Route::get('proyecto-desarrollo-web-gyb', 'PagesController@gyb');
Route::get('en/web-development-logo-design-gyb', 'PagesController@gyb_en');
Route::get('proyecto-branding-selcon', 'PagesController@selcon');
Route::get('en/branding-project-selcon', 'PagesController@selcon_en');
Route::get('proyecto-desarrollo-web-codimuba', 'PagesController@codimuba');
Route::get('en/web-development-codimuba', 'PagesController@codimuba_en');
Route::get('proyecto-desarrollo-web-parque-los-camachos', 'PagesController@loscamachos');
Route::get('en/web-development-los-camachos-guadalajara', 'PagesController@loscamachos_en');
Route::get('proyecto-social-media-mini-miney-moe', 'PagesController@mmm');
Route::get('proyecto-branding-artesanias-vely', 'PagesController@vely');
Route::get('estrategias-de-marketing-para-la-cuarentena', 'PagesController@estrategias');
Route::get('brian-eno-music-for-airports-y-la-musica-como-terapia-en-la-cuarentena', 'PagesController@brian_eno');
Route::get('el-arte-en-el-diseno', 'PagesController@arte_diseno');
Route::get('redes-sociales-en-crecimiento', 'PagesController@redes_sociales_crecimiento');
Route::get('en/web-development-los-camachos-guadalajara', 'PagesController@loscamachos_en');
Route::post('sendmail', 'PagesController@sendmail');
Route::get('aviso-de-privacidad', 'PagesController@aviso');

