<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class tags extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function posts() : BelongsToMany{
       return $this->belongsToMany(posts::class , 'piviot' , 'post_id' , 'tag_id');
    }
}
