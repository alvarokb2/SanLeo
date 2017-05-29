<?php

use Illuminate\Database\Seeder;

class TestDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name'  =>  'alvaro cabedo',
            'email' =>  'alvaro@gmail.com',
            'rol'   =>  'admin',
            'password'  =>  bcrypt('123123'),
        ]);

        DB::table('users')->insert([
            'name'  =>  'gladys cerro',
            'email' =>  'gladys@gmail.com',
            'rol'   =>  'admin',
            'password'  =>  bcrypt('123123'),
        ]);

        DB::table('users')->insert([
            'name'  =>  'profesor',
            'email' =>  'profe@gmail.com',
            'rol'   =>  'educadora',
            'password'  =>  bcrypt('123123'),
        ]);

        DB::table('users')->insert([
            'name'  =>  'mama',
            'email' =>  'mama@gmail.com',
            'rol'   =>  'apoderado',
            'password'  =>  bcrypt('123123'),
        ]);
    }
}
