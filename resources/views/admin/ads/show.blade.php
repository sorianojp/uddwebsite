@extends('layouts.app')
@section('content')
<div class="container">
<div class="row justify-content-center my-5">
    <div class="col-sm-8">
        <h2 class="font-weight-bold">{{ $ad->title }}</h2>
        <p>By {{ $ad->user->name }}  {{ $ad->created_at->format('Y-m-d') }}</p>
        <img src="/image/{{ $ad->image }}" class="img-fluid">
        <div class="text-justify" id="content">{!! $ad->content !!}</div>
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
