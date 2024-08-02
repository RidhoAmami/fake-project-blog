@extends('layouts.main')

@section('container')
    <h1 class="mb-5">Post Category : {{ $category }}</h1>

    <article class="mb-3">
        @foreach ($posts as $post)
            <h2>
                <a href="/blog/{{ $post->slug }}">{{ $post->title }}</h2></a>
            <p>{{ $post->excerpt }}</p>
        @endforeach
    </article>
@endsection