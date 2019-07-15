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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/extra_list', 'extraController@index');
Route::post('/extra_list', 'extraController@post');

Route::get('/input', 'newController@input');
Route::post('/input', 'newController@input');

Route::post('/confirm', 'newController@confirm');

Route::post('/complete', 'newController@create');

Route::get('/detail', 'detailController@index');

Route::get('/edit/check', 'editController@check');
Route::post('/edit/check', 'editController@check');


Route::get('/edit/index', 'editController@confirmerror');
Route::post('/edit/index', 'editController@confirmcheck');


Route::post('/edit/confirm', 'editController@confirm');


Route::post('/edit/complete', 'editController@update');

Route::get('/about','aboutController@description');

Route::get('/privacy','privacyController@policy');


