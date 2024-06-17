@extends('layouts.base')
@section('title', 'Note edit form')
@section('content')
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <form action="{{ route('note.update', $note->id) }}" method="POST">
        @method('PUT')
        @csrf
        <label>Title</label>
        <input type="text" name="title" value="{{ $note->title }}" />
        {{-- @error('title')
            <p style="color: red">{{ $message }}</p>
        @enderror --}}
        <br>
        <label>Description</label>
        <input type="text" name="description" value="{{ $note->description }}" />
        {{-- @error('description')
            <p style="color: red">{{ $message }}</p>
        @enderror --}}
        <br>
        <input type="submit" value="Update note" />
    </form>
    <a href="{{ route('note.index') }}">Return to home</a>
@endsection
