@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center my-5">
            <div class="col-sm-8">
                <h2 class="font-weight-bold">{{ $event->title }}</h2>
                <span>{{ $event->user->name }} | {{ $event->created_at->format('F j, Y') }}</span> |
                @if ($event->category)
                    <a href="{{ route('sdgs.show', $event->category->id) }}">
                        <span>{{ $event->category->name }}</span>
                    </a>
                @else
                    <span>N/A</span>
                @endif
                <img src="/image/{{ $event->image }}" class="img-fluid">
                <p class="text-justify" id="content">{!! $event->content !!}</p>
            </div>
        </div>
    </div>
@endsection
