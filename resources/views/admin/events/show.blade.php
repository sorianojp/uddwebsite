@extends('layouts.app')
@section('head')
    <!-- Open Graph meta tags for Facebook sharing -->
    <meta property="og:title" content="{{ $event->title }}" />
    <meta property="og:description" content="{{ Str::limit(strip_tags($event->content), 150) }}" />
    <meta property="og:image" content="{{ asset('image/' . $event->image) }}" />
    <meta property="og:url" content="{{ route('events.show', $event->id) }}" />
    <meta property="og:type" content="article" />
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center my-5">
            <div class="col-sm-8">
                <h2 class="font-weight-bold">{{ $event->title }}</h2>
                @if ($event->category)
                    <a href="{{ route('sdgs.show', $event->category->id) }}">
                        <span class="badge badge-secondary">{{ $event->category->name }}</span>
                    </a>
                @else
                @endif
                <div class="d-flex justify-content-between align-items-center my-2 border-bottom">
                    <div>
                        <span class="h5">{{ $event->user->name }}</span><br>
                        <span class="text-muted">{{ $event->date }}</span>
                    </div>
                    <div>
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(route('events.show', $event->id)) }}"
                            target="_blank">
                            <i class="bi bi-facebook h2"></i>
                        </a>
                    </div>
                </div>
                <div class="image-container">
                    <img src="/image/{{ $event->image }}" class="img-fluid">
                </div>
                <div class="text-justify content-container">{!! $event->content !!}</div>
            </div>
        </div>
    </div>
@endsection
