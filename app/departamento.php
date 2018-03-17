<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class departamento extends Model
{
    protected $table = 'cat_departamento';
    	protected $fillable = ['codigo','description'];
    	
    	public function empleados()
    	{ 
    		return $this->hasMany('App\empleado','id_departamento','id');
        }
}
