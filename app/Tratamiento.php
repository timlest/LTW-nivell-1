<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tratamiento extends Model
{
	public function pacientes()
	{
		return $this->belongsToMany('App\Paciente','trata_pacientes', 'id_tratamiento', 'id_paciente');
		
	}
	
}
