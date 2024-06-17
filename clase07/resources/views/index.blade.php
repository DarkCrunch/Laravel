@extends('layouts.base')
@section('title', 'ProductIndex')
@section('content')
    <div class="container">
        @forelse($products as $product)
            <div class="card">
                <h3>{{ $product->name }}</h3>
                <p>{{ $product->short_description }}</p>
                <p>{{ $product->price }}$ USD</p>
            </div>
        @empty
            <p>No product data :c</p>
        @endforelse
    </div>
@endsection
