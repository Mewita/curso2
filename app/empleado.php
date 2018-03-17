<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class empleado extends Model
{
   protected $fillable = ['matricula','paterno','materno','nombre','fecha_nacimiento','sexo','id_departamento','id_turno'];
   public function departamento()
    	{ 
    		return $this->belongsTo('App\departamento');
        }
   public function turno()
    	{ 
    		return $this->belongsTo('App\turno');
        }
}
