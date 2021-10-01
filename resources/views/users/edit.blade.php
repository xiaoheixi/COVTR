@extends('layouts.app')

@section('content')
    <h1>Modify User</h1>
    <form action="/users/{{ $user->id }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="username" value="{{ $user->username }}">
        <input type="text" name="password" value="{{ $user->passwordedit. }}">
        <button type="submit">
            Submit
        </button>
    </form>
@endsection
