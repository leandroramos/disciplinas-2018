<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    public function turmas()
	{
	    return $this->hasMany('App\Turma');
	}
}
