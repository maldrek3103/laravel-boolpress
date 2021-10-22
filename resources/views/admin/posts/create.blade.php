@extends('layouts.app')

@section('content')
    <div class="container">
        <header>
            <h1>Create new post</h1>
        </header>

        <section id="create-form">
            <form method="POST" action="{{ route('admin.posts.store') }}">
                @csrf
               
                <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" class="form-control" id="title" aria-describedby="title" placeholder="Enter title" name="title" required>
                  <small id="title" class="form-text text-muted">Describe briefly your post content</small>
                </div>
                <div class="form-group">
                  <label for="content">Content</label>
                  <textarea class="form-control" id="content" placeholder="Write the content of your post" name="content" rows="5"></textarea>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="image" aria-describedby="image" placeholder="Enter an URL" name="image">
                  <label for="image">Insert your image</label>
                </div>
                <div class="form-group">
                  <label for="category_id">Select category</label>
                  <select class="form-control" id="category_id" name="category_id">
                    <option selected>No category</option>
                    @foreach($categories as $category)
                      <option @if(old('category_id') == $category->id) selected @endif value="{{$category->id}}">{{$category->name}}</option>
                     @endforeach
                  </select>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
              </form>
        </section>
    </div>
@endsection