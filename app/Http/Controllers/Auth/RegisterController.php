<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('pages.auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:users|min:4|max:30',
            'email' => 'required|unique:users|email',
            'password' => 'required',
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
