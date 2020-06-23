@extends('layouts.main')

@section('main-content')
<div class="user-index container">
    {{--
    <div class="pagination-box">
        {{ $users->links() }}
    </div>
    --}}

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 mt-4">
        @foreach ($users as $user)
            <div class="col mb-4">
                <div class="card hover-translate-up">
                    <a
                        href="{{ Route('users.show', $user->id) }}"
                        class="a-reset"
                    >
                        <div class="card-body">
                            <h5 class="card-title">{{ $user->getFullName()}}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">
                                User since: {{ $user->created_at }}
                            </h6>
                        </div>
                        <img src="{{ $user->info->avatar }}" class="card-img-top" alt="Not available">
                    </a>

                    <section class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted">
                            Latest activity:
                        </h6>
                        @foreach ($user->getLatestActivity(4) as $item)
                            <div class="p-3">
                                @if($item->getTable() == 'comments')
                                    <p>
                                        Commented on <a href="{{ Route('posts.show', $item->post->id) }}">{{ $item->post->title }}</a>
                                    </p>
                                @elseif($item->getTable() == 'posts')
                                    <p>
                                        Wrote a new post: <a href="{{ Route('posts.show', $item->id) }}">{{ $item->title }}</a>
                                    </p>
                                @endif
                            </div>
                        @endforeach
                    </section>
                </div>
            </div>
        @endforeach
    </div>
    {{--
    <div class="pagination-box">
        {{ $users->links() }}
    </div>
    --}}
</div>
@endsection
