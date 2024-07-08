
@extends('layout.main')

@section('container')

    <h1 class="mb-5">Halaman Blog Post</h1>
    <article>
    @foreach ($post as $p)
        <h2>
            <a href="/post/{{ $p->slug }}">{{ $p->title }}</a>
        </h2>
        <p>{{ $p->excerpt}}</p>
    @endforeach
    </article>

@endsection
