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

	//$applications_count = \App\Applications::where('pcode')

	return view('status', compact('participant', 'access'));

});


// forma statusa koda ievadei un mini statistika
Route::get('status', function () {

	$total = \App\Applications::get()->count();

	$popular = \App\Applications::select('program_id')->distinct()->get();

	return view('check', compact('total', 'popular'));

});

Route::post('status', function (\Illuminate\Http\Request $request) {

	$access = $request->get('access');

	$application = \App\Participants::where('access', $access)->first();

	if($application)
	{
		return redirect('status/'.$access);
	}

	return abort(404, 'Šāds kods neeksistē');

});


