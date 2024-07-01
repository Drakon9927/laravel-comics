<!-- resources/views/about.blade.php -->
@extends('layouts.app')

@section('title', 'About')

@section('content')
    <h1>Credits</h1>
    <p>{{ config('store.author') }}</p>
    <ul>
        @foreach(config('store.persone') as $persona)
            <li><a href="{{ $persona['link'] }}" target="_blank">{{ $persona['text'] }}</a></li>
        @endforeach
    </ul>
@endsection