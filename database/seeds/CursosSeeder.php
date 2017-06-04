<?php

use Illuminate\Database\Seeder;
use Sanleo\Curso;
use Sanleo\User;

class CursosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cursos')->insert([
            'name'  =>  'Caballitos azules',
            'id_user' =>  '1',
        ]);

        DB::table('cursos')->insert([
            'name'  =>  'Unicornios verdes',
            'id_user' =>  '1',
        ]);

        DB::table('cursos')->insert([
            'name'  =>  'Caquita Cafe',
            'id_user' =>  '2',
        ]);
    }
}
