<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_Registration extends Model
{
    use HasFactory;

    protected $fillable = ['name' , 'email' , 'password'];
}
