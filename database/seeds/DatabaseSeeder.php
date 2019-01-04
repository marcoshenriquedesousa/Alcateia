<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Marcos',
            'email' => 'henriquesantos.uefa@gmail.com',
            'status_admin' => true,
            'password' => bcrypt('123456'),
        ]);

        DB::table('users')->insert([
            'name' => 'Adson',
            'email' => 'adssompinto@gmail.com',
            'status_admin' => true,
            'password' => bcrypt('654321'),
        ]);
        DB::table('users')->insert([
            'name' => 'Douglas',
            'email' => 'douglas.guimaraes@gmail.com',
            'status_admin' => true,
            'password' => bcrypt('987654'),
        ]);

        DB::table('users')->insert([
            'name' => 'Teste',
            'email' => 'teste@gmail.com',
            'status_admin' => false,
            'password' => bcrypt('111111'),
        ]);

        DB::table('users')->insert([
            'name' => 'Teste2',
            'email' => 'teste2@gmail.com',
            'status_admin' => false,
            'password' => bcrypt('222222'),
        ]);
    }
}
