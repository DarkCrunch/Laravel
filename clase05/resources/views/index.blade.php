@extends('layouts.base')
@section('title', 'NoteIndex')
@section('content')
    <a href="{{ route('note.create') }}">Create Note</a>
    <h1>Notes:</h1>
    <ul>
        @forelse ($notes as $note)
            <li><a href="{{ route('note.show', $note->id) }}">{{ $note->title }}</a> | <a
                    href="{{ route('note.edit', $note->id) }}">Edit</a> |
                    <form action="{{route('note.destroy', $note->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete"/>
                    </form>
            </li>
        @empty
            <li>There's no notes yet! :c</li>
        @endforelse
    </ul>
@endsection
