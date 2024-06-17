@extends('layouts.base')
@section('title', 'UserIndex')
@section('content')
    <h1>User list:</h1>
    <ul>
        @forelse ($users as $user)
            <li>{{ $user->name }} -- {{ $user->age }} years old</li>
        @empty
            <li>The list is empty :c</li>
        @endforelse
    </ul>
@endsection
