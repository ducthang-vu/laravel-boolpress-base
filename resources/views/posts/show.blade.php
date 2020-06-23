@extends('layouts.main')

@section('main-content')
    <div class="container">
        <h1 class=text-center>{{ $post->title }}</h1>
        <ul class="list-group">
            <li class="list-group-item">
                Author: <a href="{{ Route('users.show', $post->user->id)}}">{{ $post->user->getFullName() }}</a>
            </li>
            <li class="list-group-item">
                Created at: {{ $post->created_at }}
            </li>
            <li class="list-group-item">
                Last update: {{ $post->updated_at }}
            </li>
        </ul>
        <blockquote class="mt-3 p-3">
            {{ $post->body }}
        </blockquote>
        <section class="mt-3">
            @foreach ($post->comments as $comment)
                @dump($comment)
            @endforeach
        </section>
    </div>
@endsection
