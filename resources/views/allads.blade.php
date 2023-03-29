@extends('layouts.app')
@section('content')
<div class="container">
 <div class="row my-5">
    @foreach ($ads as $a)
        <div class="col-sm-6">
                <div class="bg-white my-3">
                    <img src="/image/{{ $a->image }}" class="img-fluid w-100">
                    <div class="p-3">
                        <h2>{{ $a->title }}</h2>
                        <span>{{ $a->user->name }} | {{ $a->created_at->format('Y-m-d') }}</span>
                        <div class="text-right">
                            <a href="{{ route('ads.show', $a->id) }}">Read More</a>
                        </div>
                    </div>
                    <div class="pb-1 bg-primary"></div>
                </div>
        </div>
    @endforeach
 </div>
</div>
@endsection

