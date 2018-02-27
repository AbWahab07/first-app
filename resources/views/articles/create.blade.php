@extends('master')

@section('content')
    <h1>Create a new article</h1>

    {!! Form::open(['route' => 'articles.store']) !!}
        @include('articles._form', ['submitbButtonText' => 'Create Article'])
    {!! Form::close() !!}
@endsection