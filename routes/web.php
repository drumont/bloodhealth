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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('blood/edit', ['uses' => 'EditController@edit']);

//Route::post('edit', ['uses' => 'EditController@create']);

Route::get('/home', 'HomeController@index');

Route::get('/profile/{name}', 'ProfileController@profile');

Route::resource('/blood', 'BloodController');

Route::resource('/center', 'CenterController');