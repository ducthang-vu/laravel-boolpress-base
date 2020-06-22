@extends('layouts.main')

@section('main-content')
    <div class="container">
        <ul>
            <li>Authot: <a href="{{ Route('users.show', $post->user->id)}}">{{ $post->user->name }} {{ $post->user->surname }}</a></li>
            <li>Title: {{ $post->title }}</li>
            <li>Created at: {{ $post->created_at }}</li>
            <li>Last update: {{ $post->updated_at }} </li>
            <li>Text: {{ $post->body }} </li>
        </ul>
    </div>
@endsection
