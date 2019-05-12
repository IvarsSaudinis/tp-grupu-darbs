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

	public function program_first()
	{
		return $this->hasOne('App\Subject', 'id', 'subject_id1');
	}

	public function program_second()
	{
		return $this->hasOne('App\Subject', 'id', 'subject_id2');
	}

}
