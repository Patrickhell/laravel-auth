<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    protected $fillable = [
        'singer_name',
        'title',
        'slug',
        'genres',
        'songs_number',
        'imageUrl'
    ];
}
