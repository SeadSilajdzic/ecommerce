<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() 
    {
        return view('pages.auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
        ]);
        
        User::create([
            'password' => Hash::make($request->password),
            'username' => $request->username,
            'email' => $request->email,
            'type' => 'user'
        ]);

        return redirect('/');
    }
}
