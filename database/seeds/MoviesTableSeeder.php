<?php

use Illuminate\Database\Seeder;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('movies')->insert([
          'title' => 'Iron Man',
          'rating' => 'PG 13',
          'total_gross' => 318412101,
        ]);
        \DB::table('movies')->insert([
          'title' => 'Superman',
          'rating' => 'PG',
          'total_gross' => 134218018,
        ]);
        \DB::table('movies')->insert([
          'title' => 'Spider-Man',
          'rating' => 'PG-13',
          'total_gross' => 403706375,
        ]);
    }
}
