<?php

use Illuminate\Database\Seeder;

class HotelTablaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                for ($i=0; $i < 5; $i++) { 
                    # code...
                
        		 DB::table('hoteles')->insert([
        		 'nombre' => str_random(10),
                'direccion' => str_random(7),
                'categoria' => random_int(0, 1),
                'completo' => random_int(0, 1),
                'antiguedad' => date('y/m/d')
            ]);
        	}
    }
}
