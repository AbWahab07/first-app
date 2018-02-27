@extends('master')

@section('content')
    <h1>Latest Articles</h1>

    @include('flash::message')

    @if (count($articles))
        @foreach($articles as $article)
            <div>
                <h1>{{ $article->title }}</h1>
                <p>{{ $article->body }}</p>
                <span>{{ $article->published_at }}</span>
            </div>
        @endforeach
    @else
        <p>Please create or publish some articles. </p>
    @endif
@endsection