@extends('layouts.app')
@section('konten')
<h1>Blog</h1>

@foreach ($blogpost as $post)
<article class="mb-5">

<h2><a href="/post/{{ $post->id }}">{{ $post->title }}</a></h2>
<h5>Ditulis oleh: {{ $post->author }}</h5>
<p>{{ $post->exerpt }}</p> 
</article>
@endforeach

@endsection