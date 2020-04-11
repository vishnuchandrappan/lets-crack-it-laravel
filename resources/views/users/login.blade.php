@extends('layouts.master')

@section('content')
<div class="single-page">
    <h1>Login</h1>

    <form action="/login" method="post" class="form">

        {{csrf_field()}}


        <div class="form-group">
            <label>Email ID</label>
            <input type="email" name="email" placeholder="john@example.com" required>
        </div>


        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" placeholder="password" required>
        </div>

        <div class="btn-container">
            <button type="submit">Login !</button>
        </div>

        <span class="info-message">Don't have an account ? <a href="/signup">Sign Up!</a> instead</span>

    </form>
</div>
@endsection
