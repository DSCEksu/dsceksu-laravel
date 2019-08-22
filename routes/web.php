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

Route::group(['middleware' => 'web'], function () {
  Route::get('/', 'FrontEndController@index')->name('index');
  Route::get('/learn', 'FrontEndController@learn')->name('learn');
  Route::get('/projects', 'FrontEndController@projects')->name('projects');
});

Auth::routes(['verify' => true]);

Route::group(['middleware' => ['auth','verified']], function () {
	Route::get('/home', 'HomeController@index')->name('home');
});
