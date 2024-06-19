<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();

        return view('movies.index', compact('movies'));
    }

    public function create()
    {
        $genres = Genre::all();
        return view('movies.create', compact('genres'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'genre_id' => 'required',
            'poster' => 'required|image',
            'synopsis' => 'required',
        ]);

        if ($request->hasFile('poster')) {
            $imageName = time() . '.' . $request->file('poster')->getClientOriginalExtension();
            $request->file('poster')->storeAs('src/images/movie', $imageName, 'public');
            $validatedData['poster'] = $imageName;
        }

        Movie::create($validatedData);

        return redirect('/movies')->with('success', 'Movie added successfully!');
    }

    public function edit(Movie $movie)
    {
        $genres = Genre::all();
        return view('movies.edit', compact('movie', 'genres'));
    }

    public function update(Request $request, Movie $movie)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'genre_id' => 'required',
            'poster' => 'nullable|image',
            'synopsis' => 'required',
        ]);

        if ($request->hasFile('poster')) {
            // Delete the old image
            Storage::disk('public')->delete('/src/images/movie' . $movie->poster);

            // Upload the new image
            $imageName = time() . '.' . $request->file('poster')->getClientOriginalExtension();
            $request->file('poster')->storeAs('/src/images/movie', $imageName, 'public');
            $validatedData['poster'] = $imageName;
        }


        $movie->update($validatedData);

        return redirect('/movies')->with('success', 'Movie updated successfully!');
    }

    public function destroy(Movie $movie)
    {

    $poster = Storage::disk('public')->delete('src/images/movie/' . $movie->poster);

    $movie->delete($poster);
    return redirect('/movies')->with('success', 'Movie deleted successfully!');

    }

}