@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row my-5 mx-5">
            <div class="col-sm-12">
                <div class="row">
                    <h3>{{ $category->name }} | News and Events</h3>
                </div>
                <div class="row">
                    @foreach ($category->news as $n)
                        <div class="border p-2 my-1 mx-1 bg-secondary text-white">
                            <a href="{{ route('news.show', $n->id) }}" class="text-white">
                                <span class="h5">{{ $n->title }}</span>
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="row">
                    @foreach ($category->events as $e)
                        <div class="border p-2 my-1 mx-1 bg-secondary text-white">
                            <a href="{{ route('events.show', $e->id) }}" class="text-white">
                                <span class="h5">{{ $e->title }}</span>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
