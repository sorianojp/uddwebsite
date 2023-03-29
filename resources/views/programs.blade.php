@extends('layouts.app')
@section('content')
<div class="container-fluid">
 <div class="row my-5 mx-5">
    <div class="col-sm-6">
        <h3>Programs Offerings</h3>
        <div class="accordion">
            @foreach ($programs as $p)

                <div>
                    <button class="btn btn-link text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse{{ $p->id }}">
                        {{ $p->name }}
                    </button>
                </div>
                <div id="collapse{{ $p->id }}" class="collapse" >
                    <div>
                        @foreach ($p->courses as $c)
                            <ul>
                                <li> {{ $c->name }}</li>
                            </ul>
                        @endforeach
                    </div>
                </div>

            @endforeach
        </div>
    </div>
    <div class="col-sm-3">
        <h3>News</h3>
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
    <div class="col-sm-3">
        <h3>Events</h3>
        @foreach ($events as $e)
        <div class="row my-3 border-bottom mr-2">
            <div class="col-sm-6 p-0">
                <img src="/image/{{ $e->image }}" class="img-fluid">
            </div>
            <div class="col-sm-6">
                <a href="{{ route('events.show', $e->id) }}"> <span class="font-weight-bold">{{ $e->title }}</span></a><br>
                <span><i class="fa-regular fa-user text-dark"></i> {{ $e->user->name }}</span><br>
                <span><i class="fa-regular fa-calendar text-dark"></i> {{ $e->created_at->format('Y-m-d') }}<p>
            </div>
        </div>
        @endforeach
    </div>
 </div>
</div>
@endsection

