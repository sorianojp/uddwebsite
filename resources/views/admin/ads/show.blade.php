@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center my-5">
            <div class="col-sm-8">
                <h2 class="font-weight-bold">{{ $ad->title }}</h2>
                <p>By {{ $ad->user->name }}
                    {{ $ad->date ? \Carbon\Carbon::parse($ad->date)->format('F j, Y') : \Carbon\Carbon::parse($ad->created_at)->format('F j, Y') }}
                </p>
                <img src="/image/{{ $ad->image }}" class="img-fluid">
                <div class="text-justify" id="content">{!! $ad->content !!}</div>
            </div>
        </div>
    </div>
@endsection
