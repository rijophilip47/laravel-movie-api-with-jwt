<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory; // ✅ Correct import


class Movie extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'director', 'year', 'genre_id']; // Example attributes
}
