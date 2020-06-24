@extends('layouts.main')

@section('main-content')
    <div class="container">
        @if(session('created'))
            <div class="alert alert-success transition-invisible transition-invisible">
                <p>Great, your post have been published!</p>
            </div>
        @endif

       <a href="{{ route('posts.edit', $post->id) }}" class="text-primary">Edit post</a>
       <form class="d-inline" action="{{ route('posts.destroy', $post->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" value="Delete" class="btn btn-danger">
       </form>

        <h1 class="mb-3 text-center">{{ $post->title }}</h1>
        <ul class="list-group">
            <li class="list-group-item">
                Author: <a href="{{ route('users.show', $post->user->id)}}">{{ $post->user->getFullName() }}</a>
            </li>
            <li class="list-group-item">
                Tags: @forelse($post->tags as $tag) <a href="{{ route('home') }}" class="badge-pill badge-primary">{{ $tag->name }}</a> @empty @endforelse
            </li>
            <li class="list-group-item">
                Created at: {{ $post->created_at }}
            </li>
            <li class="list-group-item">
                Last update: {{ $post->updated_at }}
            </li>
        </ul>
        <blockquote class="mt-3 p-3 bg-light">
            {{ $post->body }}
        </blockquote>

        <section class="mt-3">
            <h4 class="text-center">Comments</h4>
            @foreach ($post->comments as $comment)
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted">
                            by <a href="{{ Route('users.show', $comment->user->id) }}">
                                {{ $comment->user->getFullName()}}
                            </a>
                        </h6>
                        <blockquote class="bg-light p-2">
                            {{ $comment->body }}
                        </blockquote>
                        <h6 class="card-subtitle mb-2 text-muted">
                            Created at: {{ $comment->created_at }}<br>
                            Last update: {{ $comment->updated_at }}
                        </h6>
                    </div>
                </div>
            @endforeach
        </section>
    </div>
@endsection
