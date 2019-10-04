<?php

use Illuminate\Database\Seeder;

class tratamientosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('tratamientos')->insert([
    		'tratamiento' => 'ibuprofeno',
    		'descripcion' => 'Eficaz contra el dolor de cabeza',

    	]);

    	DB::table('tratamientos')->insert([
    		'tratamiento' => 'aspirina',
    		'descripcion' => 'Eficaz contra el dolor de cabeza o articular',
    	]);

    	DB::table('tratamientos')->insert([
    		'tratamiento' => 'frenatus',
    		'descripcion' => 'Eficaz contra la tos',
    	]);
    }
}
