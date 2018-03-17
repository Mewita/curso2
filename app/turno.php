<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class turno extends Model
{
    	protected $table = 'cat_turnos';
    	protected $fillable = ['descripcion'];
    	
    	public function turnos()
    	{ 
    		return $this->hasMany('App\turno','id_turno','id');
        }

    	public function setDescriptionAtribute($value)
    	{ 
    		 $this->atributes['descripcion'] = mb_strtouper($value,'utf-8');
        }
}
