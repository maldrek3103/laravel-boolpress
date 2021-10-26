@extends('layouts.app')

@section('content')
<div class="container">
    <header>
        <h1>Edit post</h1>
    </header>

    <section id="create-form">
        <form method="POST" action="{{ route('admin.posts.update', $post->id) }}">
            @csrf
           @method('PATCH')
            <div class="form-group">
              <label for="title" >Title</label>
              <input type="text" class="form-control" id="title" aria-describedby="title" placeholder="Enter title" name="title" value="{{ ($post->title) }}" required>
            </div>
            <div class="form-group">
              <label for="content" >Content</label>
              <textarea class="form-control" id="content" placeholder="Write the content of your post" name="content" rows="5">{{ ($post->content) }}
                </textarea>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="image" aria-describedby="image" placeholder="Enter an URL" name="image" value="{{ ($post->image) }}">
              <label for="image">Insert your image</label>
            </div>
            <div class="form-group">
              <label for="category_id">Select category</label>
              <select class="custom-select" id="category_id" name="category_id">
                <option selected>No category</option>
                @foreach($categories as $category)
                  <option @if(old('category_id') == $category->id) selected @endif value="{{$category->id}}">{{$category->name}}</option>
                 @endforeach
              </select>
            </div>


            
            <button type="submit" class="btn btn-success">Edit</button>
          </form>
    </section>
</div>
@endsection