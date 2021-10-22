@extends('layouts.app')

@section('content')

<div class="container">
  @if (session('alert-message'))
    <div class="alert alert-{{session('alert-type')}}">
      {{session('alert-message')}}
    </div>
  @endif
  <header class="d-flex justify-content-between align-items-center my-5">
      <h1>My posts</h1>
      <a href="{{route('admin.posts.create')}}" class="btn btn-success">New post</a>
    </header>
    <main class="border rounded">
    <table class="table table-light">
        <thead>
          <tr>
            <th scope="col" class="border-right border-bottom">ID</th>
            <th scope="col" class="border-right border-bottom">Category</th>
            <th scope="col" class="border-right border-bottom">Title</th>
            <th scope="col" class="border-right border-bottom">Content</th>
            <th scope="col" class="border-bottom border-right">Written on</th>
            <th scope="col" class="border-bottom">Actions</th>
          </tr>
        </thead>
        <tbody>

            @forelse ($posts as $post)
          <tr>
            <th class="border-right border-bottom">{{ $post->id }}</th>
            <td class="border-bottom border-bottom">@if($post->category){{ $post->category->name }} @else No category @endif</td>
            <td class="border-bottom">{{ $post->title }}</td>
            <td class="border-bottom">{{ $post->content }}</td>
            <td class="border-bottom">{{--{{ $post->getFormattedDate('created_at') }}--}} {{$post->created_at }}</td>
            <td class="d-flex">
              <a href="{{ route('admin.posts.show', $post->id) }}" class="btn btn-primary">Show</a>
              <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-warning ml-2">Edit</a>
              <form action="{{route('admin.posts.destroy', $post->id)}}" method="post" class="delete-button">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger ml-2">Delete</button>
              </form>
            </td>
          </tr>
         
            @empty
            <tr>
                <td colspan="3" class="text-center">There are no posts.</td>
            </tr>

          @endforelse

        </tbody>
      </table>
    </main>
      <footer class="d-flex justify-content-end">
        {{$posts->links()}}
      </footer>
  </div>
  @section('scripts')
    <script>
      const deleteButtons = document.querySelectorAll('.delete-button');
      deleteButtons.forEach(form => {
        form.addEventListener('submit', function(e){
          e.preventDefault();
          const conf = confirm('Are you sure you want to delete this post?');
          if(conf) this.submit();
        });
      });
    </script>
  @endsection
@endsection