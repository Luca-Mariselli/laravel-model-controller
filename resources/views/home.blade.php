@extends('layouts.app')

@section('content')
    <div class="ms-3">
        <h1>Film:</h1>
        @foreach ($movies as $movie)
            <p>{{ $movie['title'] }}</p>
        @endforeach
    </div>
@endsection
