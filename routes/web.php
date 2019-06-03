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

// url: /status/xyzkfjeubw
// todo: Vieta, kur atrisināt reitinga problēmu.
Route::get('status/{access}', function ($access) {

	$participant = \App\Participants::where('access', $access)->first();

	// return dd($participant->program_first);

	/*  - iegūt visus programmas pieteikumus konkrētajam lietotājam
		- sakārtot tos (rating, average)
	    - atrast kurā vietā atrodas esošais pieteikums
	    - pievienot reitingu kolekcijā .. un priecāties

	*/


	return view('status', compact('participant', 'access', 'pieteikumi'));

});

//
Route::get('application/{access}', function ($access) {

	// get participant
	$participant = \App\Participants::where('access', $access)->first();

	$programs = \App\Programs::all();

	return view('additional', compact('participant', 'programs', 'access'));

});

Route::post('application/{access}', function (\Illuminate\Http\Request $request, $access) {

	$application = new \App\Applications();
	$application->program_id = $request->get('program');
	$application->participant_id = $request->get('participant');
	$application->save();

	return redirect('status/' . $access);

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


