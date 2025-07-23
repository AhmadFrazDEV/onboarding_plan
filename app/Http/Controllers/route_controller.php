<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mtposts;

class route_controller extends Controller
{
    public function home(){
        return view('welcome');
    }
    public function Us(){
        return view('about_us');
    }
    public function contact(){
        return view('contact');
    }
    
     public function show(){
        $post = mtPosts::all();

        return view('posts_dashoard' , compact($post));
    }
}
