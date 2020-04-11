<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function create()
    {
        return view('users.login');
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->only([
            'email', 'password'
        ]);

        Session::flash('message', 'Logged In Successfully');

        return Auth::attempt($credentials)
            ? redirect("/")
            : redirect()->back()->withErrors(['Wrong Password']);
    }

    public function logout()
    {
        Auth::logout();
        Session::flash('message', 'Logged Out Successfully');
        return redirect('/');
    }
}
