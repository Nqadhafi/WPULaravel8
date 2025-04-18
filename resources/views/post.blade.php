@extends('layouts.app')
@section('konten')

<article>
    <h2>{{ $post['title'] }}</h2>
    <h5>Ditulis oleh: {{ $post['author'] }}</h5>
    <p>{{ $post['body'] }}</p> 
</article>

<a href="/blog">Back to list</a>
@endsection