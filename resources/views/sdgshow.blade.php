@extends('layouts.app')
@section('content')
    <section class="p-5">
        <h5 class="text-uppercase bg-primary p-2 rounded-lg text-white">{{ $category->name }} | News and Events</h5>
        <div class="row">
            @forelse ($category->news as $n)
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div>
                        <img src="/image/{{ $n->image }}" class="img-fluid rounded-top">
                    </div>
                    <div class="text-truncate">
                        <a href="{{ route('news.show', $n->id) }}">{{ $n->title }}</a>
                    </div>
                </div>
            @empty
            @endforelse
        </div>
        <div class="row">
            @forelse ($category->events as $e)
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div>
                        <img src="/image/{{ $e->image }}" class="img-fluid rounded-top">
                    </div>
                    <div class="text-truncate">
                        <a href="{{ route('events.show', $e->id) }}">{{ $e->title }}</a>
                    </div>
                </div>
            @empty
            @endforelse
        </div>
    </section>
@endsection
