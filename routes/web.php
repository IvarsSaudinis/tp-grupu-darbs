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

Route::get('/', 'ApplicationsController@index');

Route::post('/', 'ApplicationsController@store');

// /status/xyzkfjeubw
Route::get('status/{access}', function ($access) {

	$participant = \App\Participants::where('access', $access)->first();

	return view('status', compact('participant'));

});


// iespēja ievadīt savu unikālo kodu

Route::get('status', function () {
	return view('status');

});