@extends('layouts.app')
@section('content')
<div class="container">
<div class="row justify-content-center my-5">
    <div class="col-sm-8">
        <h2 class="font-weight-bold">{{ $news->title }}</h2>
        <p>By {{ $news->user->name }}  {{ $news->created_at->format('Y-m-d') }}</p>
        <img src="/image/{{ $news->image }}" class="img-fluid">
        <div class="text-justify" id="content">{!! $news->content !!}</div>
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
