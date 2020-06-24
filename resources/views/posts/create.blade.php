@extends('layouts.main')

@section('main-content')
    <h1 class="mb-4">Create a new post</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        @method('POST')

        <div class="form-group">
            <label for="title">Title</label>
            <input
                type="text"
                class="form-control"
                name="title"
                id="title"
                value="{{ old('title') }}"
            >
        </div>

        <div class="form-group">
            <label for="body">Body</label>
            <textarea
                name="body"
                id="body"
                cols="30"
                rows="10"
                class="form-control"
            >
                {{ old('body') }}
            </textarea>
        </div>
        @foreach($tags as $tag)
            <div class="form-check">
                <input
                    class="form-check-input"
                    type="checkbox"
                    name="tags[]"
                    id="tag-{{ $loop->iteration }}"
                    value="{{ $tag->id }}"
                >
                <label for="tag-{{ $loop->iteration }}">{{ $tag->name }}</label>
            </div>
        @endforeach

        <input type="submit" class="btn btn-primary" value="Create Post">
    </form>
@endsection
