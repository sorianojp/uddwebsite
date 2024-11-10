@extends('layouts.app')
@section('content')
    <section class="p-5">
        <h5 class="text-uppercase bg-primary p-2 rounded-lg text-white">{{ $category->name }} | News and Events</h5>
        <div class="row">
            @forelse ($category->news as $n)
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card">
                        <div class="image-container-xs">
                            <img src="/image/{{ $n->image }}" class="card-img-top" alt="{{ $n->title }}">
                        </div>
                        <div class="card-body">
                            <a href="{{ route('news.show', $n->id) }}">
                                <h5 class="card-title text-truncate">{{ $n->title }}</h5>
                            </a>
                        </div>
                        <div class="card-footer bg-primary text-white d-flex justify-content-between align-items-center">
                            <span>{{ $n->date ? \Carbon\Carbon::parse($n->date)->format('F j, Y') : \Carbon\Carbon::parse($n->created_at)->format('F j, Y') }}
                            </span>
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(route('news.show', $n->id)) }}"
                                target="_blank" class="text-white">
                                <i class="bi bi-facebook h3"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @empty
            @endforelse
        </div>
        <div class="row">
            @forelse ($category->events as $e)
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card">
                        <div class="image-container-xs">
                            <img src="/image/{{ $e->image }}" class="card-img-top" alt="{{ $e->title }}">
                        </div>
                        <div class="card-body">
                            <a href="{{ route('events.show', $e->id) }}">
                                <h5 class="card-title text-truncate">{{ $e->title }}</h5>
                            </a>
                        </div>
                        <div class="card-footer bg-primary text-white d-flex justify-content-between align-items-center">
                            <span>{{ $e->date ? \Carbon\Carbon::parse($e->date)->format('F j, Y') : \Carbon\Carbon::parse($e->created_at)->format('F j, Y') }}
                            </span>
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(route('events.show', $e->id)) }}"
                                target="_blank" class="text-white">
                                <i class="bi bi-facebook h3"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @empty
            @endforelse
        </div>
    </section>
@endsection
