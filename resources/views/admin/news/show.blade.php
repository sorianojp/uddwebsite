@extends('layouts.app')
@section('head')
    <!-- Open Graph meta tags for Facebook sharing -->
    <meta property="og:title" content="{{ $news->title }}" />
    <meta property="og:description" content="{{ Str::limit(strip_tags($news->content), 150) }}" />
    <meta property="og:image" content="{{ asset('image/' . $news->image) }}" />
    <meta property="og:url" content="{{ route('news.show', $news->id) }}" />
    <meta property="og:type" content="article" />
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center my-5">
            <div class="col-sm-8">
                <div class="row">
                    <h2 class="font-weight-bold text-primary">{{ $news->title }}</h2>
                    @if ($news->category)
                        <a href="{{ route('sdgs.show', $news->category->id) }}">
                            <h4 class="badge badge-secondary">{{ $news->category->name }}</h4>
                        </a>
                    @else
                    @endif
                </div>
                <div class="row d-flex justify-content-between align-items-center border-bottom my-2">
                    <div>
                        <span class="font-weight-bold">{{ $news->user->name }}</span><br>
                        <span class="text-muted">{{ $news->created_at->format('F j, Y') }}</span>
                    </div>
                    <div>
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(route('news.show', $news->id)) }}"
                            target="_blank">
                            <i class="bi bi-facebook h2"></i>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="image-container">
                        <img src="/image/{{ $news->image }}" class="img-fluid">
                    </div>
                    <p class="text-justify content-container">{!! $news->content !!}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
