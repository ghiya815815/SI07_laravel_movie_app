<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $movies = [
        [
            'id' => 1,
            'title' => 'Jojo Adventure',
            'poster' => 'movie-01.jpg',
            'genre' => 'Shounen',
            'synopsis' => 'Jojos Bizarre Adventure is a story about the Joestar family, who are possessed with intense
            psychic strength.',
        ],
        [
            'id' => 2,
            'title' => 'Noragami',
            'poster' => 'movie-02.jpg',
            'genre' => 'Actions',
            'synopsis' => 'Noragami is an anime series that follows a poor deity named Yato, who desires to become a famous god..',
        ],
        [
            'id' => 3,
            'title' => 'Wind Breaker',
            'poster' => 'movie-03.jpg',
            'genre' => 'Action',
            'synopsis' => 'Haruka Sakura wants nothing to do with weaklings—he only interested in the strongest of the strong..',
        ],
        [
            'id' => 4,
            'title' => 'Spy X Family',
            'poster' => 'movie-04.jpg',
            'genre' => 'Actions',
            'synopsis' => 'Corrupt politicians, frenzied nationalists and other seditious forces continue to jeopardize the thin veneer of peace',
        ],
        [
            'id' => 5,
            'title' => 'Kiminonawa',
            'poster' => 'movie-05.jpg',
            'genre' => 'Drama',
            'synopsis' => '
            The story revolves around high school students Taki Tachibana and Mitsuha Miyamizu. Despite never having met, they suddenly begin to swap bodies, leading to chaos in each other’s lives..',
        ],
    ];

    public function getAllMovies()
    {
        return $this->movies;
        
    }
}
