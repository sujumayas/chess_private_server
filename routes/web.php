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

Route::group(['prefix' => 'games'], function () {
    Route::get('/', 'GameController@index')->name('games.index');
    Route::get('/create', 'GameController@create')->name('games.create');
    Route::post('/', 'GameController@store')->name('games.store');
    Route::get('/{game}', 'GameController@show')->name('games.show');
    Route::get('/{game}/edit', 'GameController@edit')->name('games.edit');
    Route::match(['put', 'patch'], '/{game}', 'GameController@update')->name('games.update');
    Route::delete('/{game}', 'GameController@destroy')->name('games.destroy');
});
Auth::routes();

Route::get('/home', 'HomeController@index');
