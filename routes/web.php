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

Route::get('/', 'MainController@login')->name('login');

Route::post('/session/start', 'MainController@startSession')->name('session.start');
Route::get('/session/finish', 'MainController@finishSession')->name('session.finish');

Route::group(['prefix' => '/deportes'], function() {

	Route::get('/', 'MainController@home')->name('home');
	Route::get('/{sport}', 'MainController@showSportDetails')->name('sport.details');

});