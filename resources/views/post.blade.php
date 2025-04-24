@extends('layouts.app')
@section('konten')
<div class="container">
    <div class="row justify-content-center mb-3">
        <div class="col-md-8">
            <article>
                <h2 class="mb-3">{{ $post->title }}</h2>
                <img src="https://images.unsplash.com/photo-1461988320302-91bde64fc8e4?ixid=2yJhcHBfaWQiOjEyMDd9&fm=jpg&w=400&fit=max" class="card-img-top img-fluid " alt="...">
    
                <h5 class="mb-3">Ditulis oleh: {{ $post->author }} in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></h5>
                <p class="my-3">{!! $post->body !!}</p> 
            </article>
            <a href="/blog">Back to list</a>
        </div>
    </div>
</div>



@endsection