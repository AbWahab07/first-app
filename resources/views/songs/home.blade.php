@extends('master')

@section('content')

    <h1>All Songs</h1>

    @foreach($songs as $song)
        <li><a href="{{ route('songs.show',[ $song->handle]) }}"> {{ $song->title }}</a></li>
    @endforeach
@endsection