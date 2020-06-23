@extends('layouts.main')

@section('main-content')
<div class="user-index container">
    {{--
    <div class="pagination-box">
        {{ $users->links() }}
    </div>
    --}}

    <div class="row row-cols-1 row-cols-md-2 mt-4">
        @foreach ($users as $user)
            <div class="col mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $user->getFullName()}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">
                            User since: {{ $user->created_at }}<br>
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
