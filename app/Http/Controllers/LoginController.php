<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function login(Request $request)
    {

        $credentials = $request->validate([
            'username' => 'required|string|max:255',
            'password' => 'required|string|max:255',
        ]);

        $username = $credentials['username'];
        $password = $credentials['password'];


        if (Auth::attempt([
            'name'     => $username,
            'password' => $password,
        ])) {
            return redirect('/dashboard');
        }

        return back();
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
