<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User_Registration;
use Illuminate\Support\Facades\Hash;
use App\Models\tags;

class formcontroller extends Controller
{
    public function index(){
        return view('form');
    }

    public function register(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required|confirmed'
            ]
        );
        User_Registration::create(
            [
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]
        );

        return redirect('/')->with('success' , 'Successfully Register');
    }

    public function tag_show(tags $tag_id)
    {
        dump($tag_id);
    }
}
