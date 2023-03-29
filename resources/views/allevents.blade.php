@extends('layouts.app')
@section('content')
<div class="container">
 <div class="row my-5">
    <div class="col-sm-8">
        @foreach ($events as $e)
            <div class="bg-white my-3">
                <img src="/image/{{ $e->image }}" class="img-fluid w-100">
                <div class="p-3">
                    <h2>{{ $e->title }}</h2>
                    <span>{{ $e->user->name }} | {{ $e->created_at->format('Y-m-d') }}</span>
                    <div class="text-right">
                        <a href="{{ route('events.show', $e->id) }}">Read More</a>
                    </div>
                </div>
                <div class="pb-1 bg-primary"></div>
            </div>
        @endforeach
    </div>
    <div class="col-sm-4 my-3">
        <h1>News</h1>
        @foreach ($news as $n)
        <div class="row my-3 border-bottom mr-2">
            <div class="col-sm-6 p-0">
                <img src="/image/{{ $n->image }}" class="img-fluid">
            </div>
            <div class="col-sm-6">
                <a href="{{ route('news.show', $n->id) }}"> <span class="font-weight-bold text-xs">{{ $n->title }}</span></a><br>
                <span><i class="fa-regular fa-user text-dark"></i> {{ $n->user->name }}</span><br>
                <span><i class="fa-regular fa-calendar text-dark"></i> {{ $n->created_at->format('Y-m-d') }}<p>
            </div>
        </div>
        @endforeach
    </div>
 </div>
</div>
@endsection
