<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes(['verify' => true]);

Route::group(['middleware' => ['auth', 'verified']], function () {
	Route::get('/home', 'HomeController@index')->name('home');

	Route::group(['prefix' => 'settings', 'as' => 'settings.'], function () {
		Route::get('/', 'SettingsController@edit')->name('index');
		Route::post('/general', 'SettingsController@updateGeneralSettings')->name('update.general');
		Route::post('/security', 'SettingsController@updateSecuritySettings')->name('update.security');
		Route::post('/billing', 'SettingsController@updateBillingSettings')->name('update.billing');
	});


	// Route::get('/settings/profile', 'ProfileController@edit')->name('profile.edit');
	// Route::put('/settings/profile', 'ProfileController@update')->name('profile.update');
});




