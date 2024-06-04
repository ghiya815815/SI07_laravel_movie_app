<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Movie;

class ReviewController extends Controller
{
    public function review()
    {
        $reviews = Review::all();

        return view('review', compact('reviews'));
    }

    public function create()
    {
        $movies = Movie::all();
        return view('createreview', compact('movies'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'movie_id' => 'required',
            'user' => 'required',
            'rate' => 'required',
            'poster' => 'required',
            'date' => 'required',

        ]);

        Review::create($validatedData);

        return redirect('/reviews')->with('success', 'Your Review added successfully!');
    }

    public function destroy(Review $review)
{
    $review->delete();
    return redirect('/reviews')->with('success', 'review deleted successfully!');
}
}
