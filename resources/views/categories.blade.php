@extends('layouts.app')
@section('konten')
<h1>Category Post</h1>

@foreach ($categories as $category)
<ul>
    <li>
        <h2><a href="/categories/{{ $category->slug }}">{{ $category->name }}</a></h2>
    </li>
</ul>
@endforeach

@endsection