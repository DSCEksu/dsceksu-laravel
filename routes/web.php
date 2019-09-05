<?php

use Spatie\Sitemap\SitemapGenerator;
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

// Frontend Route
Route::group(['middleware' => 'web'], function () {
  Route::get('/', 'FrontEndController@index')->name('index');
  Route::get('/learn', 'FrontEndController@learn')->name('learn');
  Route::get('/projects', 'FrontEndController@projects')->name('projects');
});

// Authentication Route
Route::get('login/google', 'Auth\OAuthController@redirectToGoogle')->name('google');
Route::get('login/google/callback', 'Auth\OAuthController@handleGoogleCallback');
Route::get('login/github', 'Auth\OAuthController@redirectToGitHub')->name('github');
Route::get('login/github/callback', 'Auth\OAuthController@handleGitHubCallback');
Route::get('login/facebook', 'Auth\OAuthController@redirectToFacebook')->name('facebook');
Route::get('login/facebook/callback', 'Auth\OAuthController@handleFacebookCallback');
Auth::routes(['verify' => true]);

// Lead Route
Route::group(['namespace' => 'Lead','prefix' => 'lead', 'as' => 'lead.', 'middleware' => ['auth','role:lead','verified']], function () {
  // Dashboard
  Route::get('dashboard', 'DashboardController@dashboard')->name('dashboard');
  // Roles
  Route::resource('roles', 'RolesController');
  // Teams
  Route::resource('teams', 'TeamsController');
  // Users
  Route::resource('users', 'UsersController', ['except' => ['show']]);
  // Profile
  Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
  // SiteMap
  Route::get('sitemap', function () {
    SitemapGenerator::create(config('app.url'))->writeToFile('sitemap.xml');

    return view('frontend.sitemap');
  })->name('sitemap');
});

// Technical Core Team Route
Route::group(['namespace' => 'TechCoreTeam','prefix' => 'techcore', 'as' => 'core.', 'middleware' => ['auth','role:techcore','verified']], function () {
  // Dashboard
  Route::get('dashboard', 'DashboardController@dashboard')->name('dashboard');
  // Profile
  Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

// Non-Technical Core Team Route
Route::group(['namespace' => 'NonTechCoreTeam','prefix' => 'nontechcore', 'as' => 'noncore.', 'middleware' => ['auth','role:nontechcore','verified']], function () {
  // Dashboard
  Route::get('dashboard', 'DashboardController@dashboard')->name('dashboard');
  // Profile
  Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

// Member Route
Route::group(['namespace' => 'Member','prefix' => 'member', 'as' => 'member.', 'middleware' => ['auth','role:member','verified']], function () {
  // Dashboard
  Route::get('dashboard', 'DashboardController@dashboard')->name('dashboard');
  // Profile
  Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});
