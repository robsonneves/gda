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
Route::group(['middleware' => 'guest'], function()
{
   Route::get('/', function()
   {
		return view('site.index'); 
   });

});

Route::get('install', 'WelcomeController@install');

Route::get('site/updates/{ficha}/{inc}','SiteController@getUpdates');

Route::controllers([
   	'site' => 'SiteController'
]);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


