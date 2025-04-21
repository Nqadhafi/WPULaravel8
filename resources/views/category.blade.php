@extends('layouts.app')
@section('konten')
<h1>Category Post : {{ $category }}</h1>

@foreach ($blogposts as $post)
<article class="mb-5">

<h2><a href="/post/{{ $post->slug }}">{{ $post->title }}</a></h2>
<h5>Ditulis oleh: {{ $post->author }}</h5>
<p>{{ $post->exerpt }}</p> 
</article>
@endforeach

@endsection