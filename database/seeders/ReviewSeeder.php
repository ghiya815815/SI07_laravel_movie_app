<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::create([
            'id' => 1,
            'title' => 'Jojo Adventure',
            'poster' => 'movie-01.jpg',
            'user' => '3k',
            'rate' => '5/5',
            'date' => '1/3/2004',
        ]);
        
        Review::create([
            'id' => 2,
            'title' => 'Noragami',
            'poster' => 'movie-02.jpg',
            'user' => '2k',
            'rate' => '3/5',
            'date' => '2/3/2014',
        ]);

        Review::create([
            'id' => 3,
            'title' => 'Wind Breaker',
            'poster' => 'movie-03.jpg',
            'user' => '5k',
            'rate' => '4/5',
            'date' => '10/3/2012',
        ]);

        Review::create([
            'id' => 4,
            'title' => 'Spy X Family',
            'poster' => 'movie-04.jpg',
            'user' => '1M',
            'rate' => '5/5',
            'date' => '24/5/2022',
        ]);

        Review::create([
            'id' => 5,
            'title' => 'Kiminonawa',
            'poster' => 'movie-05.jpg',
            'user' => '5M',
            'rate' => '5/5',
            'date' => '17/8/2020',
        ]);


    }
}
