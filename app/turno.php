<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class turno extends Model
{
    	protected $table = 'cat_turnos';
    	protected $fillable = ['description'];
    	
    	public function empleados();
    	{ 
    		return $this->hasMany('App\turno','id_turno','id');
        }

    	public function setDescriptionAtribute($value);
    	{ 
    		 $this->atributes['description'] = mb_strtouper($value,'utf-8');
        }
}
