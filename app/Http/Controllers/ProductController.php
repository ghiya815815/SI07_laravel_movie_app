<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class ProductController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
    
        return view('product', compact('movies'));
    }
}
