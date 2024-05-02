<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DirectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('directors')->insert([
            'id' => 1,
            'name' => 'Christopher Nolan',
            'sex' => 'H',
            'age' => '1974/09/16',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('directors')->insert([
            'id' => 2,
            'name' => 'James Cameron',
            'sex' => 'H',
            'age' => '1985/02/21',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('directors')->insert([
            'id' => 3,
            'name' => 'Clint Eastwood',
            'sex' => 'H',
            'age' => '1986/09/10',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
