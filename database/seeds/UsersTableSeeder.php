<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@email.com',
            'tipo' => 2,
            'password' => bcrypt('12345678'),
        ]);

        DB::table('users')->insert([
            'name' => 'Cliente',
            'email' => 'cliente@email.com',
            'tipo' => 1,
            'password' => bcrypt('12345678'),
        ]);
    }
}
