<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
  public function tratamientos()
    {
        return $this->belongsToMany('App\Tratamiento','trata_pacientes', 'id_paciente', 'id_tratamiento');
   
    }
}
