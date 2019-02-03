<?php

use Illuminate\Database\Seeder;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('person')->insert([
            'name' => 'fanny mayorga',
            'idGender' =>  2,
        ]);
        DB::table('person')->insert([
            'name' => 'Jose Aguirre',
            'idGender' =>  1,
        ]);
    }
}
