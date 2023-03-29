@extends('layouts.app')
@section('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
<style>
header {
    position: relative;
    background-color: black;
    height: 75vh;
    min-height: 25rem;
    width: 100%;
    overflow: hidden;
  }

  header video {
    position: absolute;
    top: 50%;
    left: 50%;
    min-width: 100%;
    min-height: 100%;
    width: auto;
    height: auto;
    z-index: 0;
    -ms-transform: translateX(-50%) translateY(-50%);
    -moz-transform: translateX(-50%) translateY(-50%);
    -webkit-transform: translateX(-50%) translateY(-50%);
    transform: translateX(-50%) translateY(-50%);
  }

  header .container {
    position: relative;
    z-index: 2;
  }

  header .overlay {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background-color: black;
    opacity: 0.5;
    z-index: 1;
  }

  /* Media Query for devices withi coarse pointers and no hover functionality */

  /* This will use a fallback image instead of a video for devices that commonly do not support the HTML5 video element */

  @media (pointer: coarse) and (hover: none) {
    header {
      background: url('https://source.unsplash.com/XT5OInaElMw/1600x900') black no-repeat center center scroll;
    }

    header video {
      display: none;
    }
  }
</style>
@endsection
@section('content')
@include('layouts.header')
<section class="p-5">
        <div class="row">
            <div class="col-sm-8">
                <h1 class="mb-3">Featured News and Events</h1>
                @foreach ($featured as $f)
                    <div class="row my-3 border-bottom mr-2">
                        <div class="col-sm-6 p-0">
                            <img src="/image/{{ $f->image }}" class="img-fluid">
                        </div>
                        <div class="col-sm-6">
                            @if ($f instanceof App\Event)
                                <a href="{{ route('events.show', $f->id) }}"> <span class="font-weight-bold">{{ $f->title }}</span></a><br>
                                    <span><i class="bi bi-calendar2-event"></i> Event</span><br>
                            @elseif ($f instanceof App\News)
                                <a href="{{ route('news.show', $f->id) }}"> <span class="font-weight-bold">{{ $f->title }}</span></a><br>
                                    <span><i class="bi bi-newspaper"></i> News</span><br>
                            @endif
                            <span><i class="bi bi-person"></i> {{ $f->user->name }}</span><br>
                            <span><i class="bi bi-calendar"></i> {{ $f->created_at->format('Y-m-d') }}<p>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col-sm-4">
                <div class="row">
                    <h1 class="mb-3">Ads <span class="h5"><a href="{{ route('allads') }}">See All Ads</a></span></h1>
                    @foreach ($ads as $a)
                        <div class="row my-3 border-bottom mr-2">
                            <div class="col-sm-6 p-0">
                                <img src="/image/{{ $a->image }}" class="img-fluid">
                            </div>
                            <div class="col-sm-6">
                                <a href="{{ route('ads.show', $a->id) }}"> <span class="font-weight-bold">{{ $a->title }}</span></a><br>
                                <span><i class="bi bi-person"></i> {{ $a->user->name }}</span><br>
                                <span><i class="bi bi-calendar"></i> {{ $a->created_at->format('Y-m-d') }}<p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
</section>
<section class="p-5">
    <div class="row">
        <div class="col-sm-6">
            <h1 class="mb-3">News <span class="h5"><a href="{{ route('allnews') }}">See All News</a></span></h1>
            <div class="row">
                @foreach ($news as $n)
                    <div class="col-sm-4">
                        <div class="row">
                            <div class="col-sm-6 p-0">
                                <img src="/image/{{ $n->image }}" class="img-fluid">
                            </div>
                            <div class="col-sm-6">
                                <a href="{{ route('news.show', $n->id) }}"> <span class="font-weight-bold">{{ $n->title }}</span></a><br>
                                <span><i class="bi bi-person"></i> {{ $n->user->name }}</span><br>
                                <span><i class="bi bi-calendar"></i> {{ $n->created_at->format('Y-m-d') }}<p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-sm-6">
            <h1 class="mb-3">Events <span class="h5"><a href="{{ route('allevents') }}">See All Events</a></span></h1>
            <div class="row">
                @foreach ($events as $e)
                    <div class="col-sm-4">
                        <div class="row">
                            <div class="col-sm-6 p-0">
                                <img src="/image/{{ $e->image }}" class="img-fluid">
                            </div>
                            <div class="col-sm-6">
                                <a href="{{ route('events.show', $e->id) }}"> <span class="font-weight-bold">{{ $e->title }}</span></a><br>
                                <span><i class="bi bi-person"></i> {{ $e->user->name }}</span><br>
                                <span><i class="bi bi-calendar"></i> {{ $e->created_at->format('Y-m-d') }}<p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<section class="bg-dark p-5 text-white">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h1>Choose UdD <br>Home of Topnotchers</h1>
                <p>Over the past 36 years, Colegio de Dagupan has unarguably set the standards in providing quality education to the people of Dagupan and its neighboring towns. it is dedicated to live by its mission statement, stand by its philosophy and, preserve a steadfast commitment to Excellence in Education.</p>
            </div>
        </div>
    </div>
</section>
<section class="bg-light p-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-8">
                <h1>PVMO</h1>
                <div class="row">
                    <div class="col-md-6 my-3">
                        <div class="h-100 p-5 bg-light border rounded-3">
                        <h2>Philosophy</h2>
                        <p>The institution believes that through education, man's God-given gifts are discovered and developed for his personal fulfillment and community uplift.</p>
                        </div>
                    </div>
                    <div class="col-md-6 my-3">
                        <div class="h-100 p-5 text-white bg-dark rounded-3">
                        <h2>Vision</h2>
                        <p>It envisions to create a community responsive to the challenges of the changing world.</p>
                        </div>
                    </div>
                    <div class="col-md-6 my-3">
                        <div class="h-100 p-5 bg-dark text-white border rounded-3">
                        <h2>Mission</h2>
                        <p>It is tasked to prepare the individuals with the best that education can offer in a manner that is consistent with the needs of society.</p>
                        </div>
                    </div>
                    <div class="col-md-6 my-3">
                        <div class="h-100 p-5 bg-light border rounded-3">
                        <h2>Objectives</h2>
                        <ul>
                            <li>To inculcate critical thinking</li>
                            <li>To provide competent human resources in various fields</li>
                            <li>To promote discipline, justice and equality</li>
                            <li>To improve man's quality of life through research and community services</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <h1>Our Top Notchers</h1>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      @foreach($tops as $key => $t)
                        <li data-target="#carouselExampleIndicators" data-slide-to="{{ $key }}" @if($key == 0) class="active" @endif></li>
                      @endforeach
                    </ol>
                    <div class="carousel-inner">
                      @foreach($tops as $key => $t)
                        <div class="carousel-item @if($key == 0) active @endif">
                          <img class="d-block w-100" src="/image/{{ $t->image }}" alt="{{ $t->name }}">
                          <div class="carousel-caption">
                            <h3>{{ $t->name }}</h3>
                          </div>
                        </div>
                      @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
          </div>
    </div>
</section>
@section('scripts')
<script>
    $(document).ready(function () {
      $('#carousel').find('.carousel-item').first().addClass('active');
    });
</script>
@endsection
@endsection
