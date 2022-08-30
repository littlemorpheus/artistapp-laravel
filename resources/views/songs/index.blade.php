@extends('layouts.app')

@section('content')
    @foreach($songs as $song)
        <h2>
            <a href="{{ route('songs.show', $song) }}">
                {{ $song->id }} : {{ $song->name }}
            </a>
        </h2>
    @endforeach
@endsection