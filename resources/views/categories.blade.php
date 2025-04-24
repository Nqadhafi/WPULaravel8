@extends('layouts.app')
@section('konten')
<h1>Category Post</h1>
<div class="conteainer">
    <div class="row">
        @foreach ($categories as $category)
        <div class="col-md-4">
            
            <a href="/categories/{{ $category->slug }}">
            <div class="card text-bg-dark">
                <img src="https://images.unsplash.com/photo-1461988320302-91bde64fc8e4?ixid=2yJhcHBfaWQiOjEyMDd9&fm=jpg&w=400&fit=max" class="card-img-top img-fluid " alt="...">
                <div class="card-img-overlay d-flex align-items-center p-0">
                  <h5 class="card-title text-center flex-fill p-2" style="background-color: rgba(0,0,0,0.7)">{{$category->name}}</h5>
                 
                </div>
              </div> 
            </a>
            

        </div>
        @endforeach
    </div>
</div>


@endsection