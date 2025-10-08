<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NinjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ninjas')->insert([
            [
                'name' => 'Yoshi',
                'weapon' => 'Shuriken',
                'age' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ryu',
                'weapon' => 'Katana',
                'age' => 30,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Crystal',
                'weapon' => 'Kunai',
                'age' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
