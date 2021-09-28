@extends('layouts.app')

@section('content')
<h1>Dashboard</h1>
<p>{{ $numberOfLockedDownLocations }}</p>
<p>{{ $numberOfUsers }}</p>
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
            <th><button type="button">Delete</button></th>
        </tr>
    @endforeach
</table>
<p>Users</p>
<button>Add User</button>
<table>
    <tr>
        <th>Username</th>
        <th>Password</th>
        <th>Account Status</th>
    </tr>
</table>
@endsection
