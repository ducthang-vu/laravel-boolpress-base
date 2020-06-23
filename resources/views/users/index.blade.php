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
                <a
                    href="{{ Route('users.show', $user->id) }}"
                    class="a-reset"
                >
                    <div class="card hover-translate-up">
                        <div class="card-body">
                            <h5 class="card-title">{{ $user->getFullName()}}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">
                                User since: {{ $user->created_at }}
                            </h6>
                        </div>
                        <img src="{{ $user->info->avatar }}" class="card-img-top" alt="Not available">
                        <section class="card-body">
                            <h6 class="card-subtitle mb-2 text-muted">
                                Latest activity:
                            </h6>
                            @dump($user->getLatestActivity(5))
                            @foreach ($user->getLatestActivity(5) as $item)
                                @dump($item->getTable())
                                @dump(substr($item->body, 0, 100))
                            @endforeach
                        </section>
                    </div>
                </a>

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
