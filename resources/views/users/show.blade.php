@extends('layouts.main')

@section('main-content')
    <div class="container">
        <ul>
            <li>Surname: {{ $user->id }}</li>
            <li>Surname: {{ $user->surname }}</li>
            <li>Surname: {{ $user->name }}</li>
            <li>Surname: {{ $user->email }}</li>
            <li>Surname: {{ $user->info->phone}}</li>
            <li>Surname: {{ $user->info->address}}</li>
            <li>Surname: <img src="{{ $user->info->avatar }}" class="user-pic" alt="pic"></li>
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
    </div>
@endsection
