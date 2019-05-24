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
Auth::routes();
Route::get('/', 'ImageController@randomImage');
Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home');
Route::get('profile', function () {
    // Seulement les utilisateurs connectés peuvent entrer
})->middleware('verified');
Route::resource('images', 'ImageController');
Route::get('/alert/{id}', 'ImageController@alert');
Route::resource('location', 'LocationController');
Route::post('/search', 'RechercheController@search');
Route::get('/search', 'RechercheController@search');
Route::get('q', 'AutoCompleteController@index');
Route::get('autocomplete', 'AutoCompleteController@search');
Route::name('user')->get('user/{user}', 'ImageController@user');
Route::resource('profile', 'ProfileController', [
        'parameters' => ['profile' => 'user'],
    ]);
Route::resource('user', 'UserController', [
    'parameters' => ['user' => 'user'],
    ]);
Route::delete('/signalement', 'AdminController@destroyAll')->name('destroyAll');
Route::delete('/signalement2', 'AdminController@removeAllAlert')->name('removeAllAlert');
Route::delete('/signalement1/{id}', 'AdminController@removeAlert')->name('removeAlert');
Route::resource('/signalement', 'AdminController');
