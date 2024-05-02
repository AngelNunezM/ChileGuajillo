<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('movies')->insert([
            'id' => 1,
            'name' => 'Interestelar',
            'releaseDate' => '2014/10/26',
            'synopsis' => 'Gracias a un descubrimiento, un grupo de científicos y exploradores, encabezados por Cooper, se embarcan en un viaje espacial para encontrar un lugar con las condiciones necesarias para reemplazar a la Tierra y comenzar una nueva vida allí.',
            'urlTrailer' => 'https://www.youtube.com/watch?v=LYS2O1nl9iM',
            'image' => 'https://m.media-amazon.com/images/S/pv-target-images/8698aa0aa73e5acae0d4ec7fd46e6be40e7b9bd14668ce6d8694ae7442d2a722.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'clasification_id' => 1,
            'director_id' => 1,
            'user_id' => 1,
        ]);
        DB::table('movies')->insert([
            'id' => 2,
            'name' => 'Deadpool 2',
            'releaseDate' => '2018/05/15',
            'synopsis' => 'Deadpool tiene que proteger a un mutante adolescente de Cable, un soldado del futuro genéticamente modificado, pero Deadpool no está solo: otros superhéroes igual de chiflados que él unen sus fuerzas contra el perverso Cable.',
            'urlTrailer' => 'https://www.youtube.com/watch?v=GEViXLNHFdA',
            'image' => 'https://m.media-amazon.com/images/I/91+od0A3itL._AC_UF894,1000_QL80_DpWeblab_.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'clasification_id' => 2,
            'director_id' => 3,
            'user_id' => 1,
        ]);
        DB::table('movies')->insert([
            'id' => 3,
            'name' => 'Avatar 2',
            'releaseDate' => '2022/12/16',
            'synopsis' => 'Jake Sully y Neytiri han formado una familia y hacen todo lo posible por permanecer juntos. Sin embargo, deben abandonar su hogar y explorar las regiones de Pandora cuando una antigua amenaza reaparece.',
            'urlTrailer' => 'https://www.youtube.com/watch?v=d9MyW72ELq0',
            'image' => 'https://m.media-amazon.com/images/I/8124Pstj51L._AC_UF894,1000_QL80_.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'clasification_id' => 3,
            'director_id' => 2,
            'user_id' => 1,
        ]);
    }
}
