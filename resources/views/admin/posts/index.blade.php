@extends('layouts.app')

@section('content')

<div class="container">
    <table class="table table-dark">
        <h2>My posts</h2>
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
            <td><a href="{{ route('admin.posts.show', $post->id) }}" class="btn btn-primary">Vai</a></td>
          </tr>
         
            @empty
            <tr>
                <td colspan="3" class="text-center">There are no posts.</td>
            </tr>

          @endforelse

        </tbody>
      </table>
</div>

@endsection