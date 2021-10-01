@extends('layouts.app')

@section('content')
    <h1>Add User</h1>
    <form action="/users" method="POST">
        @csrf
        <input type="text" name="username" placeholder="Username">
        <input type="text" name="password" placeholder="Password">
        <button type="submit">
            Submit
        </button>
    </form>
@endsection
