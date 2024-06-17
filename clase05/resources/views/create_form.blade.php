@extends('layouts.base')
@section('title', 'Note create form')
@section('content')
    @if ($errors->any())
    <h2 style="color: red">Errors: </h2>
        <ul style="color: red">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <form action="{{ route('note.store') }}" method="POST">
        @csrf
        <label>Title</label>
        <input type="text" name="title" />
        {{-- @error('title')
            <p style="color: red">{{ $message }}</p>
        @enderror --}}
        <label>Description</label>
        <input type="text" name="description" />
        {{-- @error('description')
            <p style="color: red">{{ $message }}</p>
        @enderror --}}
        <input type="submit" value="Create note" />
    </form>
    <a href="{{ route('note.index') }}">Return to home</a>
@endsection
