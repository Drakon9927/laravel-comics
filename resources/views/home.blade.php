<!-- resources/views/home.blade.php -->
@extends('layouts.app')

@section('title', 'Benvenuto in Home')

@section('content')
    <h1>Benvenuto nel Laravel Comics</h1>
    <div class="comics">
        @foreach($data as $comic)
            <div class="comic">
                <h2>{{ $comic['title'] }}</h2>
                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                <p>{{ $comic['description'] }}</p>
                <p><strong>Price:</strong> {{ $comic['price'] }}</p>
                <p><strong>Series:</strong> {{ $comic['series'] }}</p>
                <p><strong>Sale Date:</strong> {{ $comic['sale_date'] }}</p>
                <p><strong>Type:</strong> {{ $comic['type'] }}</p>
            </div>
        @endforeach
    </div>
@endsection