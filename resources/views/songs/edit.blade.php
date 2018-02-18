@extends('master')

@section('content')
    <h1>You're editing {{$song->title}}</h1>

    {!! Form::model($song, ['method' => 'PATCH', 'route' => ['songs.update',$song->handle]]) !!}
        @include('songs._form')
    {!! Form::close() !!}

    {!! delete_form(['songs.destroy', $song->handle], 'Delete') !!}
@endsection