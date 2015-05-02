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

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');

Route::resource('users', 'UserController');
Route::resource('roles', 'RoleController');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


/*
|--------------------------------------------------------------------------
| Application filters
|--------------------------------------------------------------------------
| Here is where we add the filter to protected the different routes and 
| resources from unauthorized access.
|
|
*/

// Filter by Role.
//Entrust::routeNeedsRole('users', array('admin'), Redirect::to('/home'));

// Filter by permission.
Entrust::routeNeedsPermission('users', array('edit-user'), Redirect::to('/home'));