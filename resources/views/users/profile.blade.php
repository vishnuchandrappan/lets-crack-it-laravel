@extends('layouts.master')

@section('content')
<h2>{{Auth::user()->name}}</h2>
<p>
    {{ Auth::user()->email }}
</p>

<a href="/logout">
    <button>Logout</button>
</a>
@endsection
