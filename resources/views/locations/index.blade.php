@extends('layouts.app')

@section('content')
    <h1>
        Locations
    </h1>
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
        @foreach ($locations as $location)

        @endforeach
@endsection
