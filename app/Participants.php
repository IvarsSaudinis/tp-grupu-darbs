<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participants extends Model
{
	public $table = 'participants';

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function applications()
	{
		return $this->hasMany('App\Applications', 'participant_id', 'id');
	}



}
