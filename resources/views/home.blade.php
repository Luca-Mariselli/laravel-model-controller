@extends('layouts.app')

@section('content')
    <h1>Film:</h1>
    @foreach ($movies as $movie)
        <p>{{ $movie['title'] }}</p>
    @endforeach
@endsection
