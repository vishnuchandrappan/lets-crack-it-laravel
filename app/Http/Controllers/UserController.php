<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use Illuminate\Support\Facades\Auth;
use App\User;

class UserController extends Controller
{
    public function create()
    {
        return view('users.new');
    }

    public function store(CreateUserRequest $request)
    {
        $data = $request->only(['name', 'email']);
        $data['password'] = \Hash::make($request->password);
        $user = User::create($data);

        Auth::loginUsingId($user);

        return redirect('/');
    }

    public function me()
    {
        if (!Auth::check()) {
            return redirect("/")->withErrors(['Unauthorized ! Please Login to Continue'])->withInput();
        }

        return view('users.profile');
    }
}
