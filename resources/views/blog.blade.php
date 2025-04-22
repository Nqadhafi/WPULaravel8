@extends('layouts.app')
@section('konten')
<h1>Blog</h1>

@foreach ($blogpost as $post)
<article class="mb-5">

<h2><a href="/post/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a></h2>
<h5>Ditulis oleh: {{ $post->author }} in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></h5>
<p>{{ $post->exerpt }}</p> 
<a href="/post/{{ $post->slug }}" class="pb-3 text-decoration none btn btn-primary">Read More...</a>
</article>
@endforeach

@endsection