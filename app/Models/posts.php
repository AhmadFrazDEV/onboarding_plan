<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class posts extends Model
{
    use HasFactory;

    protected $fillable = ['title'];

    
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(tags::class, 'piviot', 'post_id', 'tag_id');
    }
}


