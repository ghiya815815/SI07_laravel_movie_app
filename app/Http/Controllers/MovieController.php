<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = new Movie();
        $movies = $movies->getAllMovies();
        
        return view('movies.index', ['movies' => $movies ]);
    }
}
