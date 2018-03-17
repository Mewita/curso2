<?php

use Illuminate\Database\Seeder;
use App\turno 

class TurnosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $turnos = array (
		['descripcion' => 'MATUTINO'],
		['descripcion' => 'VESPERTINO'],
		['descripcion' => 'NOCTURNO'],
		['descripcion' => 'ACUMULADA'],
		['descripcion' => 'ESPECIALES'],
		['descripcion' => '24 X 24'],
        );
    }
}
