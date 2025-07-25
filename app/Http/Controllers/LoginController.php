<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

    
        if ($user && Hash::check($request->password, $user->password)) {
            $request->session()->put('user_id', $user->id);
            return redirect('/');
        }

        return back()->withErrors(['email' => 'Invalid credentials'])->withInput();

        
    }

    public function logout(Request $request)
    {
        $request->session()->forget('user_id');
        return redirect('/login');
    }
}
