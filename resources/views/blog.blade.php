@extends('layouts.app')
@section('konten')
<h1>{{ $title }}</h1>
@if ($blogposts->count())
<div class="card mb-3">
    <img src="https://images.unsplash.com/photo-1461988320302-91bde64fc8e4?ixid=2yJhcHBfaWQiOjEyMDd9&fm=jpg&w=400&fit=max" class="card-img-top" alt="...">
    <div class="card-body text-center">
      <h3 class="card-title">{{ $blogposts[0]->title }}</h3>
      <h6>Ditulis oleh: {{ $blogposts[0]->author }} in <a href="/categories/{{ $blogposts[0]->category->slug }} " class="text-decoration-none">{{ $blogposts[0]->category->name }} </a><small class="text-body-secondary">{{ $blogposts[0]->created_at->diffForHumans() }}</small></h6>
      <p class="card-text">{{ $blogposts[0]->exerpt }}</p>
      <p class="card-text"></p>
      <a href="/post/{{ $blogposts[0]->slug }}" class="pb-3 text-decoration none btn btn-primary">Read More...</a>
    </div>
  </div>
  @else
  <p class="text-center fs-4">No Post Found</p>
@endif
<div class="container">
<div class="row">
    @foreach ($blogposts->skip(1) as $post)
    <div class="col-md-4 mb-2">
        <div class="card" >
            <img src="https://images.unsplash.com/photo-1461988320302-91bde64fc8e4?ixid=2yJhcHBfaWQiOjEyMDd9&fm=jpg&w=400&fit=max" class="card-img-top" alt="...">
            <div class="card-body">
                
              <h3 class="card-title"><a href="/post/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a></h3>
              <h6>Ditulis oleh: {{ $post->author }} in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a><small class="text-body-secondary">{{ $post->created_at->diffForHumans() }}</small></h6>
              <p class="card-text">{{ $post->exerpt }}</p>
              <a href="/post/{{ $post->slug }}" class="pb-3 text-decoration none btn btn-primary">Read More...</a>
    
            </div>
          </div>
    </div>
    @endforeach
</div>
</div>


@endsection