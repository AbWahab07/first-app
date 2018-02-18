@extends('master')

@section('content')
    <h1>Create a new Song</h1>

    {!! Form::open(['route' => ['songs.store']]) !!}
        @include('songs._form')
    {!! Form::close() !!}
@endsection