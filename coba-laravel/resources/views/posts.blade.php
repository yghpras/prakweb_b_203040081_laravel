@extends('layouts.main')

@section('Container')

<h1 class="mb-5">Halaman Blog Posts</h1>

@foreach ($posts as $post)
<article class="mb-5 border-bottom pb-4">
    <H2>
        <a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a>
    </H2>

    <p>By. <a href="#" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none"> {{ $post->category->name }}</a></p>

    <p>{{ $post->excerpt }}</p>

    <a href="/posts/{{ $post->slug }}">Read more..</a>
</article> 
@endforeach
   
@endsection

    