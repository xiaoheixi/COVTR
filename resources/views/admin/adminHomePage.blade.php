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
        <th>Modify</th>
        <th>Delete</th>
</table>
<p>Users</p>
<button>Add User</button>
<table>
    <tr>
        <th>Username</th>
        <th>Password</th>
        <th>Account Status</th>
</table>
@endsection
