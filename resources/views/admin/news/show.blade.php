@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center my-5">
            <div class="col-sm-8">
                <h2 class="font-weight-bold">{{ $news->title }}</h2>
                <span>{{ $news->user->name }} | {{ $news->created_at->format('Y-m-d') }}</span> |
                @if ($news->category)
                    <a href="{{ route('sdgs.show', $news->category->id) }}">
                        <span>{{ $news->category->name }}</span>
                    </a>
                @else
                    <span>N/A</span>
                @endif
                <img src="/image/{{ $news->image }}" class="img-fluid">
                <p class="text-justify" id="content">{!! $news->content !!}</p>
            </div>
        </div>
    </div>
@section('scripts')
    <script>
        const img = document.querySelector('#content img');
        img.classList.add('img-fluid');
    </script>
@endsection
@endsection
