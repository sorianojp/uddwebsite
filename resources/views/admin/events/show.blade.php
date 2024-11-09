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
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <div class="row">
                    <h2 class="font-weight-bold text-primary">{{ $event->title }}</h2>
                    @if ($event->category)
                        <h4>
                            <a href="{{ route('sdgs.show', $event->category->id) }}">
                                <span class="badge badge-secondary h4">{{ $event->category->name }}</span>
                            </a>
                        </h4>
                    @else
                    @endif
                </div>
                <div class="row d-flex justify-content-between align-items-center border-bottom my-2">
                    <div>
                        <span class="font-weight-bold">{{ $event->user->name }}</span><br>
                        <span class="text-muted">{{ $event->created_at->format('F j, Y') }}</span>
                    </div>
                    <div>
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(route('events.show', $event->id)) }}"
                            target="_blank">
                            <i class="bi bi-facebook h2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="image-container">
                <img src="/image/{{ $event->image }}" class="img-fluid">
            </div>
            <p class="text-justify content-container">{!! $event->content !!}</p>
        </div>
    </div>
@endsection
