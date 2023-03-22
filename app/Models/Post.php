<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'blog';
    protected $primaryKey = 'id';
    protected $fillable = ['title', 'content'];
    // use HasFactory;
}