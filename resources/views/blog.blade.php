@extends('layouts.main')

@section('container')
    <h1 class="mb-5">Halaman Blog</h1>
    <article class="mb-3">
        @foreach ($posts as $post)
            <h2>
                <a href="/blog/{{ $post->slug }}">{{ $post->title }}</h2></a>
                <p>By. Ridho Amami in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
            <p>{{ $post->excerpt }}</p>
        @endforeach
    </article>
@endsection