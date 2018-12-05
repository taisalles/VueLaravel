<?php

use Illuminate\Database\Seeder;

class LivrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('livros')->insert([
    		'titulo'=> 'Java para Web',
    		'autor'=> 'Paul Deitel',
    		'resumo'=> 'Novatec',
    	]);
        DB::table('livros')->insert([
            'titulo' => 'PHP',
            'autor' => 'Mark Deitel',
            'resumo' => 'Iniciantes em PHP',

        ]);        
        //
    }
}
