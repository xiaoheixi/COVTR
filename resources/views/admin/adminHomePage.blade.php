@extends('layouts.app')

@section('content')
<h1>Dashboard</h1>
<p>{{ $numberOfLockedDownLocations }} locations locked down</p>
<p>{{ $numberOfUsers }} users</p>
<p>Locked Down Locations</p>
<a href="locations/create">Add Locked Down Location</a>
<table>
    <tr>
        <th>Location</th>
        <th>Days</th>
    </tr>
    @foreach ($locations as $location)
        <tr>
            <th>{{ $location->location }}</th>
            <th>{{ $location->days }}</th>
            <th><a href="locations/{{ $location->id }}/edit">Modify</a></th>
            <th><form action="/locations/{{ $location->id }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit">
                        Delete
                    </button>
                </form>
            </th>
        </tr>
    @endforeach
</table>
<p>Users</p>
<a href="users/create">Add User</a>
<table>
    <tr>
        <th>Username</th>
        <th>Password</th>
    </tr>
    @foreach ($users as $user)
        <tr>
            <th>{{ $user->username }}</th>
            <th>{{ $user->password }}</th>
            <th><a href="users/{{ $user->id }}/edit">Modify</a></th>
            <th><form action="/users/{{ $user->id }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit">
                        Delete
                    </button>
                </form>
            </th>
        </tr>
    @endforeach
</table>
@endsection
