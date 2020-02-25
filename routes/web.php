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

Route::get('/', 'HomeController@index');

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/contact', 'HomeController@contact')->name('contact');

Route::namespace('Admin')->prefix('painel')->name('painel.')->group(function () {
    
    Route::get('/', 'HomeController@index')->name('index');

    Route::resource('users', 'UsersController');
    Route::resource('pages', 'PagesController');

    Route::get('profile', 'ProfileController@index')->name('profile');
    Route::put('profile/{user}', 'ProfileController@save')->name('profile.save');

    Route::get('settings', 'SettingsController@index')->name('settings');
    Route::put('settings', 'SettingsController@save')->name('settings.update');


});
