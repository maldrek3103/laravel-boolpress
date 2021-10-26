@extends('layouts.app')

@section('content')


<div class="container">
    <div class="card">
    <div class="card-header">
        <h1 class="card-title">{{ $post->title }}</h1>
    </div>
    <div class="card-body">
         <span class="badge badge-info">Category: {{$post->category->name}}</span>
        <p class="card-text">{{$post->content}}</p>
      <div class=" d-flex justify-content-between">
          <address>{{$post->created_at}}</address>
          <div id="actions" class="d-flex">
          <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-warning ml-2">Edit</a>
          <form action="{{route('admin.posts.destroy', $post->id)}}" method="post" class="delete-button">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger ml-2">Delete</button>
          </form>
        </div>
        </div>
    </div>
  </div>
</div>





@endsection