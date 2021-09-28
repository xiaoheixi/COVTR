@extends('layouts.app')

@section('content')
    <h1>Modify Lockdown Location</h1>
    <form action="/locations" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="location" value="{{ $location->location }}">
        <input type="text" name="days" value="{{ $location->days }}">
        <button type="submit">
            Submit
        </button>
    </form>
@endsection
