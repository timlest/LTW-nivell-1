<?php

use Illuminate\Database\Seeder;

class trataPacientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trata_pacientes')->insert([
    		'id_paciente' => 1,
    		'id_tratamiento' => 2,

    	]);
    	DB::table('trata_pacientes')->insert([
    		'id_paciente' => 1,
    		'id_tratamiento' => 1,

    	]);
    	DB::table('trata_pacientes')->insert([
    		'id_paciente' => 2,
    		'id_tratamiento' => 3,

    	]);
    	DB::table('trata_pacientes')->insert([
    		'id_paciente' => 3,
    		'id_tratamiento' => 1,

    	]);
    	DB::table('trata_pacientes')->insert([
    		'id_paciente' => 3,
    		'id_tratamiento' => 3,

    	]);
    }
}
