@extends('layouts.app')
@section('konten')

<article>
    <h2>{{ $post->title }}</h2>
    <h5>Ditulis oleh: {{ $post->author }} in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></h5>
    <p>{!! $post->body !!}</p> 
</article>

<a href="/blog">Back to list</a>
@endsection