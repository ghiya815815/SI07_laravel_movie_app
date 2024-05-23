<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function review()
    {
        $reviews = Review::all();

        return view('review', compact('reviews'));
    }
}
