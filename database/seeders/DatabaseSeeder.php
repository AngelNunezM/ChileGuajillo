<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);
        $this->call(ActorSeeder::class);
        $this->call(DirectorSeeder::class);
        $this->call(GenderSeeder::class);
        $this->call(ClasificationSeeder::class);
        $this->call(MovieSeeder::class);
        $this->call(Actor_MovieSeeder::class);
        $this->call(Gender_MovieSeeder::class);;
    }
}
