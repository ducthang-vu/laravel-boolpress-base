<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header class="mb-5">
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <div class="nav-brand">
                    <a href="{{ route('home') }}">Lara super blog!</a>
                </div>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item pr-3 pl-3
                                @if(Route::currentRouteNamed('home')) active @endif"
                    >
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item pr-3 pl-3
                                @if(Route::currentRouteNamed('posts.index')) active @endif"
                    >
                        <a href="{{ route('posts.index') }}" class="nav-link">Posts</a>
                    </li>
                    <li class="nav-item pr-3 pl-3
                            @if(Route::currentRouteNamed('posts.index')) active @endif"
                    >
                        <a class="nav-link" href="{{ route('users.index') }}">Users</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
