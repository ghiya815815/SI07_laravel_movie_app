<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = ['movie_id','poster', 'user', 'rate', 'date',];

    public function movie()
    {
        return $this->belongsTo(Movie::class, 'movie_id');
    }
    
}


