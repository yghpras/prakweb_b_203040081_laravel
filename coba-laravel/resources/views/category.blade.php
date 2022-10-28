@extends('layouts.main')

@section('Container')

<h1 class="mb-5">Halaman Category : {{ $category }} </h1>

@foreach ($posts as $post)
<article class="mb-5">
    <H2>
        <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
    </H2>
    <p>{{ $post->excerpt }}</p>
</article> 
@endforeach
   
@endsection

    