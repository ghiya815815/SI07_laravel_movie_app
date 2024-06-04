<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;

class GenreController extends Controller
{
    public function genre()
    {
        $genres = Genre::all();

        return view('genre', compact('genres'));
    }

    public function create()
    {

        return view('creategenre', );
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
    ]);

    Genre::create($validatedData);

    return redirect('/genres')->with('success', 'Genre added successfully!');
}

public function destroy(Genre $genre)
{
    $genre->delete();
    return redirect('/genres')->with('success', 'Movie deleted successfully!');
}

}