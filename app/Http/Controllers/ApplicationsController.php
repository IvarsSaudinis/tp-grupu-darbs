<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreApplicationData;
use App\Programs;
use App\Subject;
use Illuminate\Http\Request;

class ApplicationsController extends Controller
{
    public function index()
    {
	    $programs = Programs::all();

	    $subjects = Subject::all();

	    return view('application', compact('programs', 'subjects'));
    }

	public function store(StoreApplicationData $request)
	{
		return dd($request);
	}

}
