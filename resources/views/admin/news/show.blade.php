@extends('layouts.app')
@section('content')
    <div class="container">
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
