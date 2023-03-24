<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'blog';
    protected $primaryKey = 'id';
    protected $fillable = ['title', 'content', 'image', 'length', 'genre', 'release', 'summary', 'video'];
    // use HasFactory;

    public static function getPostsByDate()
    {
        return self::orderBy('created_at', 'desc')->get();
    }
}
