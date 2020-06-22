@extends('layouts.main')

@section('main-content')
    <div class="container">
        <h2>All posts</h2>
        <ul>
            {{ $posts->links() }}
            @foreach ($posts as $post)
                <li>
                    <p><a href="{{ Route('posts.show', $post->id) }}">{{ $post->title }}</a></p>
                    <p>Created at: {{ $post->created_at }}</p>
                    <p>Last update: {{ $post->updated_at }}</p>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
