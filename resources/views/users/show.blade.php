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
        </ul>
    </div>
@endsection
