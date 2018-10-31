<?php

use Illuminate\Database\Seeder;
use App\Categoria;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(App\Categoria::class, 1)->create();

        App\Categoria::create([
            'descripcion' => 'Asistente',

        ]);



        App\Categoria::create([
        	'descripcion' => 'Expositor',

        ]);
    }
}
