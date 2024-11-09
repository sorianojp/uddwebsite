@extends('layouts.app')
@section('content')
    @include('layouts.header')
    <section class="p-5">
        <div class="row">
            <div class="col-lg-6">
                <h5 class="text-uppercase bg-secondary p-2 text-white rounded-lg">Featured News</h5>
                <div class="row">
                    @foreach ($fnews as $fn)
                        <div class="col-sm-12 col-md-8 col-lg-6 my-2">
                            <div class="card">
                                <div class="image-container-xs">
                                    <img src="/image/{{ $fn->image }}" class="card-img-top" alt="{{ $fn->title }}">
                                </div>
                                <div class="card-body">
                                    <a href="{{ route('news.show', $fn->id) }}">
                                        <h5 class="card-title text-truncate">{{ $fn->title }}</h5>
                                    </a>
                                </div>
                                <div
                                    class="card-footer bg-primary text-white d-flex justify-content-between align-items-center">
                                    <span>{{ $fn->created_at->format('F j, Y') }}</span>
                                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(route('news.show', $fn->id)) }}"
                                        target="_blank" class="text-white">
                                        <i class="bi bi-facebook"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-6">
                <h5 class="text-uppercase bg-secondary p-2 text-white rounded-lg">Featured Events</h5>
                <div class="row">
                    @foreach ($fevents as $fe)
                        <div class="col-sm-12 col-md-8 col-lg-6 my-2">
                            <div class="card">
                                <div class="image-container-xs">
                                    <img src="/image/{{ $fe->image }}" class="card-img-top" alt="{{ $fe->title }}">
                                </div>
                                <div class="card-body">
                                    <a href="{{ route('events.show', $fe->id) }}">
                                        <h5 class="card-title text-truncate">{{ $fe->title }}</h5>
                                    </a>
                                </div>
                                <div class="card-footer bg-primary text-white d-flex justify-content-between">
                                    <span>{{ $fe->created_at->format('F j, Y') }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section class="p-5">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active text-uppercase" id="pills-news-tab" data-toggle="pill"
                    data-target="#pills-news" type="button" role="tab" aria-controls="pills-new"
                    aria-selected="true">News</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link text-uppercase" id="pills-events-tab" data-toggle="pill" data-target="#pills-events"
                    type="button" role="tab" aria-controls="pills-events" aria-selected="false">Events</button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-news" role="tabpanel" aria-labelledby="pills-news-tab">
                <div class="row">
                    @foreach ($news as $n)
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="card">
                                <div class="image-container-sm">
                                    <img src="/image/{{ $n->image }}" class="card-img-top" alt="{{ $n->title }}">
                                </div>
                                <div class="card-body">
                                    <a href="{{ route('news.show', $n->id) }}">
                                        <h5 class="card-title text-truncate">{{ $n->title }}</h5>
                                    </a>
                                </div>
                                <div class="card-footer bg-primary text-white d-flex justify-content-between">
                                    <span>{{ $n->created_at->format('F j, Y') }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="pills-events" role="tabpanel" aria-labelledby="pills-events-tab">
                <div class="row">
                    @foreach ($events as $e)
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="card">
                                <div class="image-container-sm">
                                    <img src="/image/{{ $e->image }}" class="card-img-top" alt="{{ $e->title }}">
                                </div>
                                <div class="card-body">
                                    <a href="{{ route('events.show', $e->id) }}">
                                        <h5 class="card-title text-truncate">{{ $e->title }}</h5>
                                    </a>
                                </div>
                                <div class="card-footer bg-primary text-white d-flex justify-content-between">
                                    <span>{{ $e->created_at->format('F j, Y') }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section class="p-5">
        <h5 class="text-uppercase bg-secondary p-2 rounded-lg"><a href="{{ route('allads') }}"
                class="text-white">Advertisement</a></h5>
        <div class="row">
            @foreach ($ads as $a)
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div>
                        <img src="/image/{{ $a->image }}" class="img-fluid rounded-top">
                    </div>
                    <div class="text-truncate">
                        <a href="{{ route('ads.show', $a->id) }}">{{ $a->title }}</a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <section class="bg-primary p-5 text-white">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h1>Choose UdD <br>Home of Topnotchers</h1>
                    <p>Over the past 36 years, Colegio de Dagupan has unarguably set the standards in providing quality
                        education to the people of Dagupan and its neighboring towns. it is dedicated to live by its mission
                        statement, stand by its philosophy and, preserve a steadfast commitment to Excellence in Education.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid bg-light">
        <div class="row">
            <div class="col-md-6 my-3">
                <div class="h-100 p-5 bg-light border rounded-3">
                    <h5 class="text-uppercase">Philosophy</h5>
                    <p>The institution believes that through education, man's God-given gifts are discovered
                        and
                        developed for his personal fulfillment and community uplift.</p>
                </div>
            </div>
            <div class="col-md-6 my-3">
                <div class="h-100 p-5 text-white bg-primary rounded-3">
                    <h5 class="text-uppercase">Vision</h5>
                    <p>It envisions to create a community responsive to the challenges of the changing
                        world.
                    </p>
                </div>
            </div>
            <div class="col-md-6 my-3">
                <div class="h-100 p-5 bg-primary text-white border rounded-3">
                    <h5 class="text-uppercase">Mission</h5>
                    <p>It is tasked to prepare the individuals with the best that education can offer in a
                        manner that is consistent with the needs of society.</p>
                </div>
            </div>
            <div class="col-md-6 my-3">
                <div class="h-100 p-5 bg-light border rounded-3">
                    <h5 class="text-uppercase">Objectives</h5>
                    <ul>
                        <li>To inculcate critical thinking</li>
                        <li>To provide competent human resources in various fields</li>
                        <li>To promote discipline, justice and equality</li>
                        <li>To improve man's quality of life through research and community services</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 my-3">
                <div class="h-100 p-5 bg-light border rounded-3">
                    <h5 class="text-uppercase">EOMS Policy</h5>
                    <p>
                        The Universidad de Dagupan shall be known as an educational institution that
                        discovers
                        and develops God-given gifts to help achieve man’s personal fulfillment and
                        community
                        uplift.
                    </p>
                    <p>
                        We shall continue to maintain our innovation efforts with the potential to create
                        solutions and to be an invaluable national treasure. We shall commit to providing
                        satisfactory service delivery and comply with applicable requirements in view of the
                        educational, scientific, and technical developments.
                    </p>
                    <p>
                        We shall unceasingly improve our instruction, research, extension, and
                        administrative
                        operations to provide excellent education to individuals and communities responsive
                        to
                        the challenges of the changing world.
                    </p>
                </div>
            </div>
            <div class="col-md-6 my-3">
                <div class="h-100 p-5 bg-primary text-white border rounded-3">
                    <h5 class="text-uppercase">Core Values</h5>
                    <p>
                        <span class="h4">C</span> - Competence
                    </p>
                    <p>
                        <span class="h4">U</span> - Unity
                    </p>
                    <p>
                        <span class="h4">D</span> - Dynamism
                    </p>
                    <p>
                        <span class="h4">D</span> - Dedication
                    </p>
                    <p>
                        <span class="h4">I</span> - Integrity
                    </p>
                    <p>
                        <span class="h4">T</span> - Teamwork
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="container bg-light">
        <div class="row" style="height: 100%;">
            <div class="col-sm-6 d-flex flex-column">
                <h5 class="text-uppercase bg-primary p-2 text-white rounded-lg">Our Top Notchers</h5>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="flex: 1;">
                    <ol class="carousel-indicators">
                        @foreach ($tops as $key => $t)
                            <li data-target="#carouselExampleIndicators" data-slide-to="{{ $key }}"
                                @if ($key == 0) class="active" @endif></li>
                        @endforeach
                    </ol>
                    <div class="carousel-inner">
                        @foreach ($tops as $key => $t)
                            <div class="carousel-item @if ($key == 0) active @endif">
                                <img class="d-block w-100" src="/image/{{ $t->image }}" alt="{{ $t->name }}">
                                <div class="carousel-caption p-2 bg-primary">
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
            <div class="col-sm-6 d-flex flex-column">
                <h5 class="text-uppercase bg-primary p-2 text-white rounded-lg">Our Location</h5>
                <iframe width="100%" style="flex: 1; border: 0;" frameborder="0" scrolling="no"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.2829789828197!2d120.33868471492065!3d16.050798788892298!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x339167fd0100bfa3%3A0x392d5ed47cf7639e!2sColegio%20de%20Dagupan!5e0!3m2!1sen!2sph!4v1589948066111!5m2!1sen!2sph"
                    allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            $('#carousel').find('.carousel-item').first().addClass('active');
        });
    </script>
@endsection
