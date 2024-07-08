@extends('layout.main')

@section('container')
    <h2>{{ $post->title }}</h2>

    {!! $post->body !!}

    <a href="/post">Bact to post</a>
@endsection
