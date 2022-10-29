@extends('layouts.main')

@section('Container')

<h1 class="mb-5">{{ $title }}</h1>

@foreach ($posts as $post)
<article class="mb-5 border-bottom pb-4">
    <H2>
        <a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a>
    </H2>

    <p>By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none"> {{ $post->category->name }}</a></p>

    <p>{{ $post->excerpt }}</p>

    <a href="/posts/{{ $post->slug }}" class="text-decoration-none">Read more..</a>
    <a href="/blog/" class="d-block mt-3 text-decoration-none">Back to blog</a>

</article> 
@endforeach
   
@endsection

    