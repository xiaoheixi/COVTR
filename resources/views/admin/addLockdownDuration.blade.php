@extends('layouts.app')

@section('content')
<h1>Add Lockdown Duration</h1>
<form action="/action_page.php">
    <label for="days">Days:</label><br>
    <input type="text" id="days" name="days" value="Enter Days"><br>
    <input type="submit" value="Submit">
</form>
@endsection
