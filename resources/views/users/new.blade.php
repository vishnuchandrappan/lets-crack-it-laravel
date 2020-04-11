@extends('layouts.master')

@section('content')
<div class="single-page">
    <h1>Create New Account</h1>
    <form action="/users" method="post" class="form">

        {{csrf_field()}}

        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" placeholder="John Doe" required>
        </div>

        <div class="form-group">
            <label>Email ID</label>
            <input type="email" name="email" placeholder="john@example.com" required>
        </div>


        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" placeholder="password" required>
            <input type="password" name="password_confirmation" placeholder="confirm password" required>
        </div>

        <div class="btn-container">
            <button type="submit">Sign Up !</button>
        </div>

        <span class="info-message">Already have an account ? <a href="/login">Login</a> instead</span>
    </form>
</div>
@endsection
