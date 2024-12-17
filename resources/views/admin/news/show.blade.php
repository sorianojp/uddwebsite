@extends('layouts.app')
@section('head')
    <!-- Open Graph meta tags for Facebook sharing -->
    <meta property="og:title" content="{{ $news->title }}" />
    <meta property="og:description" content="{{ Str::limit(strip_tags($news->content), 150) }}" />
    <meta property="og:image" content="/image/{{ $news->image }}" />
    <meta property="og:url" content="{{ route('news.show', $news->id) }}" />
    <meta property="og:type" content="article" />
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center my-5">
            <div class="col-sm-8">
                <h2 class="font-weight-bold">{{ $news->title }}</h2>
                <a href="{{ $news->category ? route('sdgs.show', $news->category->id) : '#' }}">
                    <span class="badge badge-secondary">{{ $news->category->name ?? 'N/A' }}</span>
                </a>
                <div class="d-flex justify-content-between align-items-center my-2 border-bottom">
                    <div>
                        <span class="h5">{{ $news->user->name }}</span><br>
                        <span
                            class="text-muted">{{ $news->date ? \Carbon\Carbon::parse($news->date)->format('F j, Y') : \Carbon\Carbon::parse($news->created_at)->format('F j, Y') }}
                        </span>
                    </div>
                    <div>
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(route('news.show', $news->id)) }}"
                            target="_blank">
                            <i class="bi bi-facebook h2"></i>
                        </a>
                    </div>
                </div>
                <div>
                    <img src="/image/{{ $news->image }}" class="img-fluid">
                </div>
                <!-- Facebook Share Button -->
                <div class="fb-share-button" data-href="{{ route('news.show', $news->id) }}" data-layout="button_count">
                </div>
                <div class="text-justify content-container">{!! $news->content !!}</div>
            </div>
        </div>
    </div>
@endsection
