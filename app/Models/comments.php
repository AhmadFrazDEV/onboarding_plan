<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
    protected $fillable = [
        'post_id',
        'comment_content',
    ];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
