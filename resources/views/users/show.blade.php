@extends('layouts.main')

@section('main-content')
    <div class="users-show-page container">
        <header class="text-center mb-5">
            <h1 class="mb-3 text-center">{{ $user->getFullName() }}</h1>
            <div class="d-inline-flex mb-3">
                <img src="{{ $user->info->avatar }}" alt="Not available" class="avatar">
                <ul class="list-group">
                    <li class="list-group-item">Id #: {{ $user->id }}</li>
                    <li class="list-group-item">Surname: {{ $user->surname }}</li>
                    <li class="list-group-item">Name: {{ $user->name }}</li>
                    <li class="list-group-item">Email: {{ $user->email }}</li>
                    <li class="list-group-item">Phone number: {{ $user->info->phone}}</li>
                </ul>
            </div>
        </header>

        <section>
            <h3 class="text-center mb-3">Activities</h3>
            <div class="row">
                <section class="posts col-6">
                    <h5 class="pl-5">Posts by {{ $user->name }}</h5>
                    @foreach ($user->posts as $post)
                        <a href="{{ Route('posts.show', $post->slug) }}" class="a-reset">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $post->title }}</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">
                                        Created at: {{ $post->created_at }}<br>
                                        Last update: {{ $post->updated_at }}
                                    </h6>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </section>

                <section class="comments">
                    <h5 class="pl-5">Comments by {{ $user->name }}</h5>
                    @foreach ($user->comments as $comment)
                        <a href="{{ Route('posts.show', $post->slug) }}" class="a-reset"> {{-- come fare? --}}
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">on "{{ $comment->post->title }}"</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">
                                        Created at: {{ $post->created_at }}<br>
                                        Last update: {{ $post->updated_at }}
                                    </h6>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </section>
            </div>
        </section>
@endsection
