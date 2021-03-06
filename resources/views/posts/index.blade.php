@extends('layouts.main')

@section('main-content')
    <div class="post-index container">
        @if(session('post-deleted'))
            <div class="alert alert-success transition-invisible">
                <p>The post {{ session('post-deleted') }} has been deleted.</p>
            </div>
        @endif

        <a href="{{ route('posts.create') }}" class="btn btn-primary">New post</a>

        <div class="pagination-box">
            {{ $posts->links() }}
        </div>

        <div class="row row-cols-1 row-cols-md-2 mt-4">
            @foreach ($posts as $post)
                <div class="col mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">
                                by <a href="{{ Route('users.show', $post->user->id) }}">
                                    {{ $post->user->getFullName()}}
                                </a>
                            </h6>
                            <h6 class="card-subtitle mb-2 text-muted">
                                Created at: {{ $post->created_at }}<br>
                                Last update: {{ $post->updated_at }}
                            </h6>
                            <blockquote class="bg-light">{{ substr($post->body, 0, 150) }}...</blockquote>
                            <p class="h6">
                                @forelse($post->tags as $tag)
                                    <a href="{{ route('home') }}" class="badge-pill badge-primary">{{ $tag->name }}</a>
                                @empty @endforelse</p>
                            <a href="{{ Route('posts.show', $post->slug) }}" class="btn btn-primary">Open post</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="pagination-box">
            {{ $posts->links() }}
        </div>
    </div>
@endsection
