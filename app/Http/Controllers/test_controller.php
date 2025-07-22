<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class test_controller extends Controller
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
    // parametrized controllers

    public function show($name , $id = null){
        if($id)
        {
            echo 'Hello' . $name . 'and id is : ' .$id;
        }
        else
        {
            echo 'user doesnot have id';
        }
    }
}
