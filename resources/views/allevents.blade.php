@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row my-5">
            <div class="col-sm-8">
                <h5 class="text-uppercase bg-primary p-2 text-white rounded-lg">Events</h5>
                @foreach ($events as $e)
                    <div class="bg-white my-3">
                        <img src="/image/{{ $e->image }}" class="img-fluid w-100">
                        <div class="p-3">
                            <h2>{{ $e->title }}</h2>
                            <span>{{ $e->user->name }} | {{ $e->date }}</span>
                            <div class="text-right">
                                <a href="{{ route('events.show', $e->id) }}">Read More</a>
                            </div>
                        </div>
                        <div class="pb-1 bg-primary"></div>
                    </div>
                @endforeach
            </div>
            <div class="col-sm-4">
                <h5 class="text-uppercase bg-primary p-2 text-white rounded-lg">News</h5>
                @foreach ($news as $n)
                    <div class="my-3 border-bottom">
                        <div>
                            <img src="/image/{{ $n->image }}" class="img-fluid">
                        </div>
                        <div class="text-truncate">
                            <a href="{{ route('news.show', $n->id) }}">{{ $n->title }}</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
