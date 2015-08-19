<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('salah/preferences', array('as' => 'salah.preferences', 'uses' => 'SalahController@preferences'));
Route::get('salah/view', array('as' => 'salah.view', 'uses' => 'SalahController@view'));
Route::get('salah/getTimings', array('as' => 'salah.getTimingsAjax', 'uses' => 'SalahController@getTimingsAjax'));
Route::resource('salah', 'SalahController');
Route::resource('mosque', 'MosqueController');
Route::resource('time', 'MosqueSalahTimeController');

Route::post('user/login', array('as' => 'user.login', 'uses' => 'UserController@login'));
Route::get('user/logout', array('as' => 'user.logout', 'uses' => 'UserController@logout'));
Route::resource('user', 'UserController');