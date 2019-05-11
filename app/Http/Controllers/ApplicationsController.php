<?php

namespace App\Http\Controllers;

use App\Applications;
use App\Http\Requests\StoreApplicationData;
use App\Participants;
use App\Programs;
use App\Subject;
use Illuminate\Http\Request;

class ApplicationsController extends Controller
{
	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
    public function index()
    {
	    $programs = Programs::all();

	    $subjects = Subject::all();

	    return view('application', compact('programs', 'subjects'));
    }

	/**
	 * @param StoreApplicationData $request
	 */
	public function store(StoreApplicationData $request)
	{
		// Validācija izieta. Skatīt app/Http/Request/StoreApplicationData
		// ------------

		/* īsti nekorekts veidas kā saglabāt unikālu saiti. Bet kolēģi apzinās, ka formas dati būs tik maz, ka risks nav liels */
		$access_code = str_random(8);

		// Saglabājam formas datus par lietotāju
		$participant = new Participants();
		$participant->name = $request->get('name');
		$participant->surname = $request->get('surname');
		$participant->pcode = $request->get('pcode');
		$participant->email = $request->get('email');
		$participant->average = $request->get('average');
		$participant->access = $access_code;
		$participant->save();

		/* Saglabājam formas datus par pieteikumu (tādi katram lietotājam var būt ne vairāk par divi */
		$application = new Applications();
		$application->participant_id = $participant->id;
		$application->program_id = $request->get('program');
		$application->subject_id1 = $request->get('p1');
		$application->CElevel = $request->get('CElevel1');
		$application->subject_id2 = $request->get('p2');
		$application->CElevel2 = $request->get('CElevel2');
		$application->save();

		/* Te varbūt vajadzētu rādīt pieteikumu rezultātu formu. No sērijas - pacentāmies un tiekam atalgoti ar rezultātu formu */

		/* Forma ir veiksmīgi saglabāta. Brīnumainais - acīmredzamais. Varbūt redirektējam uz unikālo saitie? Jā, kāpēc nē, jo sūtīt uz e-pastu nozīmētu, ka
		jāizmanto kāda reāla e-pasta resuri, bet tam mums liels slinkums */

		return redirect('status/' .$access_code );

		//return view('status', compact('access_code'));


	}

}
