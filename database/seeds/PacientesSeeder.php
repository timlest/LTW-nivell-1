<?php

use Illuminate\Database\Seeder;

class PacientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pacientes')->insert([
            'nombre' => 'juanito',
            'apellidos' => 'perez rua',
            'nacimiento' => '2016-12-31',
        ]);

          DB::table('pacientes')->insert([
            'nombre' => 'carlos',
            'apellidos' => 'perez rua',
            'nacimiento' => '2016-12-31',
        ]);

          DB::table('pacientes')->insert([
          	'nombre' => 'victoria',
          	'apellidos' => 'estefania maria',
          	'nacimiento' => '2016-12-31',
          ]);
    }
}
