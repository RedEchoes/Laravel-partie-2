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

Route::get('/', 'ImageController@randomImage');
Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home');
Route::get('profile', function () {
    // Seulement les utilisateurs connectés peuvent entrer
})->middleware('verified');
Route::resource('images', 'ImageController');
Route::post('/alert/{id}', 'ImageController@alert');
Route::resource('location', 'LocationController');
Route::post('/search', 'RechercheController@search');
Route::get('/search', 'RechercheController@search');
Route::name('user')->get('user/{user}', 'ImageController@user');
Route::resource ('profile', 'ProfileController', [
        'only' => ['edit', 'update', 'destroy', 'show'],
        'parameters' => ['profile' => 'user']
    ]);
Route::resource('user', 'UserController');
Route::resource ('user', 'UserController', [
    'only' => ['edit', 'update', 'destroy', 'show'],
    'parameters' => ['user' => 'user']
]);
