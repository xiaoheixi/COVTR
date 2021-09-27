@extends('layouts.app')

@section('content')
<h1>Dashboard</h1>
<p>{{ $numberOfLockedDownLocations }}</p>
<p>{{ $numberOfUsers }}</p>
<p>Locked Down Locations</p>
<button>Add Locked Down Location</button>
<table>
    <tr>
        <th>Location</th>
        <th>Days</th>
    </tr>
    @foreach ($locations as $location)
        <tr>
            <th>{{ $location->location }}</th>
            <th>{{ $location->days }}</th>
            <th><button type="button">Modify</button></th>
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
