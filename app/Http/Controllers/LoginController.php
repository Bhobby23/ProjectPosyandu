<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        $user =User::where('username', $username)->first();

        if ($user && $user->password == $password) {
            session()->put('user_id', $user->id);
            return redirect()->route('home');
        } else {
            return redirect()->back()->with('error', 'Username atau password salah');
        }
    }

    public function logout()
    {
        session()->forget('user_id');
        return redirect()->route('login');
    }
}
