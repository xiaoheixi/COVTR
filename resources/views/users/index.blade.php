@extends('layouts.app')

@section('content')
    <h1>
        Users
    </h1>
    <table>
        <tr>
            <th>Username</th>
            <th>Password</th>
        </tr>
        @foreach ($users as $user)
            <tr>
                <th>{{ $user->username }}</th>
                <th>{{ $user->password }}</th>
                <th><button type="button">Modify</button></th>
                <th><button type="button">Delete</button></th>
            </tr>
        @endforeach
    </table>
        @foreach ($users as $user)

        @endforeach
@endsection
