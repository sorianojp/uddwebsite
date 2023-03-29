@extends('layouts.app')
@section('content')
<div class="container">
<div class="row justify-content-center my-5">
    <div class="col-sm-8">
        <h2 class="font-weight-bold">{{ $event->title }}</h2>
        <p>By {{ $event->user->name }}  {{ $event->created_at->format('Y-m-d') }}</p>
        <img src="/image/{{ $event->image }}" class="img-fluid">
        <p class="text-justify">{!! $event->content !!}</p>
    </div>
</div>
</div>
@endsection
