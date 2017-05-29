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
Route::group(['middleware' => 'web'], function()
{
	Route::get('/', function () {
		return view('index');
	})->name('index');
	Route::get('/home', 'UserController@index');
	Route::get('/about', function(){
		return view('about');
	})->name('about');
	Route::get('/insert', ['uses' => 'CommonController@insert',
		'as' => 'insert']);
});
Auth::routes();
Route::group(['middleware' => 'auth'], function()
{

});