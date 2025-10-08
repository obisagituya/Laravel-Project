@extends('layouts.layout')

@section('content')
<div class="wrapper ninja-details">
    <h1>Ninja Details</h1>
    <p>Name: {{ $ninja->name }}</p>
    <p>Weapon: {{ $ninja->weapon }}</p>
    <p>Age: {{ $ninja->age }}</p>

    {{-- This form handles the deletion of the ninja --}}
    <form action="{{ route('ninjas.destroy', $ninja->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button class="delete-button">Complete Mission</button>
    </form>

    <a href="{{ route('ninjas.index') }}" class="back-link"><- Back to all ninjas</a>
</div>
@endsection