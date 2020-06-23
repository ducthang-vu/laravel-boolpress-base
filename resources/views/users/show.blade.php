@extends('layouts.main')

@section('main-content')
    <div class="users-index-page container">
        <h1 class="mb-3 text-center">{{ $user->getFullName() }}</h1>
        <div class="d-flex">
            <ul class="list-group">
                <li class="list-group-item">Id #: {{ $user->id }}</li>
                <li class="list-group-item">Surname: {{ $user->surname }}</li>
                <li class="list-group-item">Name: {{ $user->name }}</li>
                <li class="list-group-item">Email: {{ $user->email }}</li>
                <li class="list-group-item">Phone number: {{ $user->info->phone}}</li>
                <li>
                    <ol>
                        @foreach ($user->posts as $post)
                            <li>
                                <p><a href="{{ Route('posts.show', $post->id) }}">{{ $post->title }}</a></p>
                                <p>Created at: {{ $post->created_at }}</p>
                                <p>Updated at: {{ $post->updated_at }}</p>
                                <p>{{ substr($post->body, 0, 150) }}</p>
                            </li>
                        @endforeach
                    </ol>
                </li>
            </ul>
            <img src="{{ $user->info->avatar }}" alt="Not available" class="avatar">
        </div>

    </div>
@endsection
