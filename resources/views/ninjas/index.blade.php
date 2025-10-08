@extends('layouts.layout')

@section('content')
<div class="wrapper ninjas-index">
    <div class="header-with-button">
        <h1>All Ninjas</h1>
        <a href="{{ route('ninjas.create') }}" class="button">Add a New Ninja</a>
    </div>
    <div class="ninja-list">
        @foreach($ninjas as $ninja)
            <div class="ninja-item">
                <img src="/img/ninja-icon.png" alt="ninja icon">
                <a href="{{ route('ninjas.show', $ninja->id) }}">
                    <h4>{{ $ninja->name }}</h4>
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection