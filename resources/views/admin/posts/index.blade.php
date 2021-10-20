@extends('layouts.app')

@section('content')

<div class="container">
  <header class="d-flex justify-content-between align-items-center my-5">
      <h1>My posts</h1>
      <a href="{{route('admin.posts.create')}}" class="btn btn-success">New post</a>
    </header>
    <main class="border rounded">
    <table class="table table-light">
        <thead>
          <tr>
            <th scope="col">Title</th>
            <th scope="col">Content</th>
            <th scope="col">Written on</th>
          </tr>
        </thead>
        <tbody>

            @forelse ($posts as $post)
          <tr>
            <td>{{ $post->title }}</td>
            <td>{{ $post->content }}</td>
            <td>{{ $post->getFormattedDate('cerated_at') }}</td>
            <td class="d-flex">
              <a href="{{ route('admin.posts.show', $post->id) }}" class="btn btn-primary">Show</a>
              <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-warning ml-2">Edit</a>
              <form action="{{route('admin.posts.destroy', $post->id)}}" method="post">
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

@endsection