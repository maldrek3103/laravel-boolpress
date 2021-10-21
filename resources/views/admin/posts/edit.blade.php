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
            <button type="submit" class="btn btn-success">Edit</button>
          </form>
    </section>
</div>
@endsection