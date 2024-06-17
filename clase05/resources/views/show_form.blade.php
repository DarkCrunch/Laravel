@extends('layouts.base')
@section('title', 'Note show form')
@section('content')
    <label>Title: {{ $note->title }}</label>
    <br>
    <label>Description: {{ $note->description }}</label>
    <br>
    <a href="{{ route('note.index') }}">Return to home</a>
@endsection
