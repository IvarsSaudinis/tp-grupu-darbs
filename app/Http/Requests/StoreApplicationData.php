<?php

namespace App\Http\Requests;

use App\Participants;
use Illuminate\Foundation\Http\FormRequest;

class StoreApplicationData extends FormRequest
{
    /**
     * fuck, pārbaudām vai datubāzē šāds personas kods jau nav divas reizes. Nepārbaudām personas kodu ar svītru vai bez...
     *
     * @return bool
     */
    public function authorize()
    {

    	$participants = Participants::where('pcode', $this->request->get('pcode'))->count();

    	if($participants>2)
	    {
	    	return false;
	    }

        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
        	'program'   => 'required',
	        'name'      => 'required|min:3',
	        'surname'   => 'required|min:3',
	        'pcode'     => 'required|min:11|max:15',
	        'email'     => 'required|email',
	        'p1'        => 'required|different:p2',
	        'p2'        => 'required|different:p1',
	        'CElevel1'  => 'required',
	        'CElevel2'  => 'required',
	        'average'   => 'required|numeric|regex:/^\d+(\.\d{1,2})?$/',
	        'gdpr'      => 'required',
        ];
    }

	/**
	 * Paša definētie kļūdu ziņojumu teksti.
	 *
	 * @return array
	 */
	public function messages()
	{
		return [
			'program.required' => 'Lai pieteiktos studijām, jāizvēlas interesējošā studiju programma',
			'name.required' => 'Ir nepieciešams ievadīt potenciālā studenta vārdu',
			'name.min' => 'Vārda garums ir par īsu!',
			'surname.required'  => 'Ir nepieciešams ievadīt potenciālā studenta uzvārdu',
			'surname.min'  => 'Uzvārda garums ir par īsu!',
			'pcode.required' => "Nepieciešams ievadīt personas kodu",
			'pcode.min' => "Nekorekts personas koda garums",
			'pcode.max' => "Nekorekts personas koda garums",
			'p1.required' => "Nepieciešams izvēlēties priekšmetu",
			'p2.required' => "Nepieciešams izvēlēties priekšmetu",
			'p1.different' => "Iesniegšanai jāizvēlas divus dažādus priekšmetus",
			'p2.different' => "Iesniegšanai jāizvēlas divus dažādus priekšmetus",
			'CElevel1.required' => "Jānorāda eksāmenā saņemtais vērtējums",
			'CElevel2.required' => "Jānorāda eksāmenā saņemtais vērtējums",
			'email.required' => "Ir nepieciešams ievadīt e-pastu",
			'email.email' => "Ir nepieciešams ievadīt korektu (!!!) e-pastu",
			'average.required' => "Ir nepieciešams ievadīt atestāta vidējo atzīmi",
			'average.digits_between' => "Ir nepieciešams ievadīt korektu atestāta vidējo atzīmi",
			'average.numeric' => "Kā decimālo zīmi nepieciešams izmantot punktu",
			'gdpr.required' => "Lai iesniegtu formu, ir jāapstiprina GDPR regulas nosacījumi"

		];
	}
}
