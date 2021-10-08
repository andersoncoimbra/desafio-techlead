<?php

use Illuminate\Database\Seeder;

class LivroTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('livros')->insert([
            'titulo' => 'Cliente Titulo',
            'user_id' => 1,
            'autor' => 'Cliente Autor'            
        ]);

        DB::table('livros')->insert([
            'titulo' => 'Admin Titulo',
            'user_id' => 2,
            'autor' => 'Admin Autor'            
        ]);
    }
}
