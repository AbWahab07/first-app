@extends('master')

@section('content')
    <h4>Title : </h4> <span> {{ $song->title }} </span><br/>
    <h4>Lyrics : </h4> <span> {{ $song->lyrics }} </span><br/>
    <h4>handle : </h4> <span> {{$song->handle}} </span><br>

    <a class="btn btn-primary" href="{{ route('songs.edit', [$song->handle]) }}">Edit the song</a>

@endsection