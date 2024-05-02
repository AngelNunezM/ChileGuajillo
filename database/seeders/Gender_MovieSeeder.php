<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Gender_MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('gender_movie')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'gender_id' => 1,
            'movie_id' => 1
        ]);
        DB::table('gender_movie')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'gender_id' => 4,
            'movie_id' => 1
        ]);
        DB::table('gender_movie')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'gender_id' => 5,
            'movie_id' => 2
        ]);
        DB::table('gender_movie')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'gender_id' => 3,
            'movie_id' => 2
        ]);
        DB::table('gender_movie')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'gender_id' => 4,
            'movie_id' => 3
        ]);
        DB::table('gender_movie')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'gender_id' => 5,
            'movie_id' => 3
        ]);
    }
}
