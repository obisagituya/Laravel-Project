@extends('layouts.layout')

@section('content')
<div class="wrapper create-ninja">
    <h1>Add a New Ninja</h1>
    <form action="/ninja" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        
        <label for="weapon">Weapon:</label>
        <input type="text" id="weapon" name="weapon" required>
        
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required>
        
        <input type="submit" value="Add Ninja">
    </form>
</div>
@endsection