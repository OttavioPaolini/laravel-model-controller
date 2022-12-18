@extends('layouts.app')
@section('content')
    <ul>

        @foreach ($movies as $movie)
            <li>
                <h3>{{ $movie->title }}</h3>
            </li>
        @endforeach
    </ul>
@endsection
