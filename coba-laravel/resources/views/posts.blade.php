@extends('layouts.main')

@section('Container')

@foreach ($posts as $post)
<article class="mb-5">
    <H2>
        <a href="/posts/{{ $post["slug"] }}">{{ $post["title"] }}</a>
    </H2>
    <H5>By: {{ $post["author"] }}</H5>
    <p>{{ $post["body"] }}</p>
</article> 
@endforeach
   
@endsection

    