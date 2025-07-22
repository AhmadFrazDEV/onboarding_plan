<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
