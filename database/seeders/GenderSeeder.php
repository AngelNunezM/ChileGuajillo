<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('genders')->insert([
            'id' => 1,
            'name' => 'Terror',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('genders')->insert([
            'id' => 2,
            'name' => 'Suspenso',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('genders')->insert([
            'id' => 3,
            'name' => 'Comedia',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('genders')->insert([
            'id' => 4,
            'name' => 'Ciencia Ficción',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('genders')->insert([
            'id' => 5,
            'name' => 'Acción',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
