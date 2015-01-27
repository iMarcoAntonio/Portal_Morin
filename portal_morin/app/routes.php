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

Route::get('index', ['before' => 'auth', function(){
	return View::make('index');
}]);

Route::get('/', 'AuthController@showLogin'); //Mustra el login
Route::post('login', ['uses' => 'AuthController@doLogin', 'before' => 'guest']);
Route::get('logout', ['uses' => 'AuthController@doLogout', 'before' => 'auth']);

Route::get('upload', 'UploadController@getUpload');
Route::post('upload', 'UploadController@doUpload');
Route::resource('provider', 'ProviderController');