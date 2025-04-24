@extends('layouts.app')
@section('konten')
<h1 class="text-center">{{ $title }}</h1>
<div class="row justify-content-center mb-3">
  <div class="col-md-6">
    <form action="/blog" >
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
        <button class="btn  btn-danger" type="submit">Search</button>
      </div>
    </form>
  </div>
</div>
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

<div class="container">
<div class="row">
    @foreach ($blogposts->skip(1) as $post)
    <div class="col-md-4 mb-2">
        <div class="card" >
          <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.7); color: white; font-size: 12px; border-radius: 5px;">
           <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none text-white">{{ $post->category->name }}</a> 
          </div>
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
@else
<p class="text-center fs-4">No Post Found</p>
@endif
</div>


@endsection