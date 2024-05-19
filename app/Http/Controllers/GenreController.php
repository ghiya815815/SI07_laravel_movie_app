<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;

class GenreController extends Controller
{
    public function genre()
    {
        $genre = new Genre();
        $genres = $genre->getAllGenre();
        
        return view('genre', ['genres' => $genres ]);
    }
}

