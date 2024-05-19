<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function review()
    {
        $review = new Review();
        $reviews = $review->getAllReview();
        
        return view('review', ['reviews' => $reviews ]);
    }
}
