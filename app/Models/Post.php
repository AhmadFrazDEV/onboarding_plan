<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'summary',
        'body',
        'image',
        'published_at',
        'is_published',
];

    public function comments()
    {
        return $this->hasMany(comments::class);
    }
}
