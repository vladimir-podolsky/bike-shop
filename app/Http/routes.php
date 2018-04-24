<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'BaseController@getIndex');
Route::get('bicycles', 'BicyclesController@getIndex');
Route::get('parts', 'PartsController@getIndex');
Route::get('accessories', 'AccessoriesController@getIndex');
Route::get('cart', 'CartController@getIndex');
Route::get('single', 'SingleController@getIndex');

Route::auth();


Route::get('/home', 'HomeController@index');
