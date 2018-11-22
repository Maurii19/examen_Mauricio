<?php

use Illuminate\Database\Seeder;

class ClienteTablaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {           
            for ($i=0; $i < 10 ; $i++) { 
                DB::table('clientes')->insert([
        		'nif' => str_random(9),
                'nombre' => str_random(7),
                'apellido' => str_random(9),
                'telefono' => str_random(9)
            ]);
        	}

    }
}
