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
//$router->resource('/', 'UsersController@index');
Route::get('/', 'UsersController@index');
//Route::resource('Users.login', 'UsersController@login');
Route::post('user.login', 
  ['as' => 'login', 'uses' => 'UsersController@login']);
Route::get('user.reg', 
  ['as' => 'register', 'uses' => 'UsersController@register']);
Route::post('user.store', 
  ['as' => 'reg_store', 'uses' => 'UsersController@store']);
Route::get('user.destroy', 
  ['as' => 'logout', 'uses' => 'UsersController@destroy']);
Route::get('user.activate/{code}', 
  ['as' => 'activate/{code}', 'uses' => 'UsersController@activate']);

Route::group(array('prefix' => 'api/v1'), function()
{
    Route::resource('login', 'API\v1\APIUsersController@login');
    Route::resource('/', 'API\v1\APIUsersController');
    //Route::resource('users', 'UserController');
    //Route::resource('categories', 'CategoryController');
});
/**

Route::get('users', 
  ['as' => 'login_form', 'uses' => 'UsersController@index']);
Route::post('login', 
  ['as' => 'login', 'uses' => 'UsersController@login']);
Route::get('reg', 
  ['as' => 'register', 'uses' => 'UsersController@register']);
//Route::get('login', 'UsersController@login');

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]); **/
