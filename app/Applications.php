<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applications extends Model
{
    public $table = 'applications';

    public function program()
    {
    	return $this->hasOne('App\Programs', 'id', 'program_id');
    }
}
