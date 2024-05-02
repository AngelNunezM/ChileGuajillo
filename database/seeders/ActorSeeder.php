<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ActorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('actors')->insert([
            'id' => 1,
            'name' => 'Sasha Grey',
            'sex' => 'M',
            'age' => '1998/02/12',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('actors')->insert([
            'id' => 2,
            'name' => 'Mario Casas',
            'sex' => 'H',
            'age' => '1995/11/05',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('actors')->insert([
            'id' => 3,
            'name' => 'Dwayne Johnson',
            'sex' => 'M',
            'age' => '1993/05/02',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('actors')->insert([
            'id' => 4,
            'name' => 'Johnny Depp',
            'sex' => 'M',
            'age' => '1995/11/05',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('actors')->insert([
            'id' => 5,
            'name' => 'Zac Efron',
            'sex' => 'M',
            'age' => '1996/09/05',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
