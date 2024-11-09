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
        <div>
            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(route('events.show', $event->id)) }}"
                target="_blank">
                <i class="bi bi-facebook h2"></i>
            </a>
        </div>
        <div class="row justify-content-center my-5">
            <div class="col-sm-8">
                <h2 class="font-weight-bold">{{ $news->title }}</h2>
                <span>{{ $news->user->name }} | {{ $news->created_at->format('F j, Y') }}</span> |
                @if ($news->category)
                    <a href="{{ route('sdgs.show', $news->category->id) }}">
                        <span>{{ $news->category->name }}</span>
                    </a>
                @else
                    <span>N/A</span>
                @endif
                <div class="image-container">
                    <img src="/image/{{ $news->image }}" class="img-fluid">
                </div>
                <div class="text-justify content-container">{!! $news->content !!}</div>
            </div>
        </div>
    </div>
@endsection
