@extends('layouts.app')

@section('content')
<h1>Dashboard</h1>
<p>{{ $numberOfLockedDownLocations }}</p>
<p>{{ $numberOfUsers }}</p>
@endsection
