<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $genres = [
        [
            'id' => 1,
            'name'=> 'Jojos Bizarre (shounen)',
            'descriptions' => 'Jojos Bizarre Adventure is a story about the Joestar family, who are possessed with intense
            psychic strength.',
        ],
        [
            'id' => 2,
            'name'=> 'Noragami (action)',
            'descriptions' => 'Noragami is an anime series that follows a poor deity named Yato, who desires to become a
            famous god.',
        ],
        [
            'id' => 3,
            'name'=> 'Wind Breaker (action)',
            'descriptions' => 'Haruka Sakura wants nothing to do with weaklings—hes only interested in the strongest of
            the strong.',
        ],
        [
            'id' => 4,
            'name'=> 'Spy X Family (action)',
            'descriptions' => 'Corrupt politicians, frenzied nationalists and other seditious forces continue to jeopardize
            the thin veneer of peace.',
        ],
        [
            'id' => 5,
            'name'=> 'Kiminonawa (drama)',
            'descriptions' => 'The story revolves around high school students Taki Tachibana and Mitsuha Miyamizu. Despite
            never having met, they suddenly begin to swap bodies, leading to chaos in each others
            lives.',
        ],



    ];
    public function getAllGenre()
    {
        return $this->genres;
        
    }
}

