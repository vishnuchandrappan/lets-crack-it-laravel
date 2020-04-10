<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use Illuminate\Http\Request;
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
        User::create($data);

        return redirect('/');
    }
}
