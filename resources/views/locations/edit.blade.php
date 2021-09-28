@extends('layouts.app')

@section('content')
    <h1>Add Lockdown Location</h1>
    <form action="/locations" method="POST">
        @csrf
        <input type="text" name="location" placeholder="Location">
        <input type="text" name="days" placeholder="Days">
        <button type="submit">
            Submit
        </button>
    </form>
@endsection
