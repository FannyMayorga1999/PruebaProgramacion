<?php

use Illuminate\Database\Seeder;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('gender')->insert([
            'description' => 'masculino',
        ]);
        DB::table('gender')->insert([
            'description' => 'femenino',
        ]);
    }
}
