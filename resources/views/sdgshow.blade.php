@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row my-5 mx-5">
            <div class="col-sm-12">
                <h5 class="text-uppercase bg-primary p-2 rounded-lg">{{ $category->name }} | News and Events</h5>
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
                        <div class="border p-2 my-1 mx-1 bg-secondary text-white">
                            <span>No news in this category</span>
                        </div>
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
                        <div class="border p-2 my-1 mx-1 bg-secondary text-white">
                            <span>No events in this category</span>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection
