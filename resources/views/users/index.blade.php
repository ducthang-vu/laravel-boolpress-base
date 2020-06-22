@extends('layouts.main')

@section('main-content')
    <div class="container">
        @foreach ($users as $user)
            <header>
                <div>
                    <h3>{{ $user->surname }}  {{ $user->name}} </h3>
                    <p>User since {{ $user->created_at }}</p>
                </div>
                <a href="{{ Route('users.show', $user->id) }}">Details</a>
            </header>
            <h4>Last posts (max 3)</h4>
            <ul>
                @foreach ($user->posts()->orderBy('updated_at','desc')->limit(3)->get() as $post)
                    <li>
                        <h5>{{ $post->title }}</h5>
                        <p>{{ substr($post->body, 0, 150) }}<a href="{{ route('posts.show', $post->id) }}">...</a></p>
                    </li>
                @endforeach
            </ul>
            @unless ($loop->last)
                <hr>
            @endunless
        @endforeach
    </div>
@endsection
