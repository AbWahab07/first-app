@extends('master')

@section('content')
    <h1>{{ $article->title }}</h1>
    <p>{{ $article->body }}</p>
    <span>{{ $article->published_at }}</span>
    {{ $article->user }}
@endsection