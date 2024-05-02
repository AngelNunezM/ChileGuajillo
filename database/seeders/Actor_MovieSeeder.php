<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Actor_MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('actor_movie')->insert([
            'movie_id' => '1',
            'actor_id' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('actor_movie')->insert([
            'movie_id' => '1',
            'actor_id' => '2',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('actor_movie')->insert([
            'movie_id' => '2',
            'actor_id' => '2',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('actor_movie')->insert([
            'movie_id' => '2',
            'actor_id' => '3',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('actor_movie')->insert([
            'movie_id' => '3',
            'actor_id' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('actor_movie')->insert([
            'movie_id' => '3',
            'actor_id' => '4',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

    }
}
