@extends('layouts.app')
<style>
    .img-hover {
        transition: transform 0.3s ease;
        /* Smooth transition effect */
        position: relative;
        /* Ensure it can have a z-index */
    }

    .img-hover:hover {
        transform: scale(1.2);
        /* Enlarge the image to 120% on hover */
        z-index: 10;
        /* Bring the image to the front */
    }
</style>
@section('content')
    <section class="p-5">
        <div class="row d-flex justify-content-center">
            <div class="col-sm-8 col-md-6 col-lg-4">
                <img src="{{ asset('images/sdg.png') }}" class="img-fluid" />
            </div>
        </div>
        <div class="row">
            @foreach ($categories as $c)
                <div class="col-sm-4 col-md-3 col-lg-2 col-xl-1 p-0">
                    <a href="{{ route('sdgs.show', $c) }}">
                        @if ($c->name == 'NO POVERTY')
                            <img src="{{ asset('images/sdg/sdg1.gif') }}" class="img-hover img-fluid" />
                        @elseif ($c->name == 'ZERO HUNGER')
                            <img src="{{ asset('images/sdg/sdg2.gif') }}" class="img-hover img-fluid" />
                        @elseif ($c->name == 'GOOD HEALTH AND WELL BEING')
                            <img src="{{ asset('images/sdg/sdg3.gif') }}" class="img-hover img-fluid" />
                        @elseif ($c->name == 'QUALITY EDUCATION')
                            <img src="{{ asset('images/sdg/sdg4.gif') }}" class="img-hover img-fluid" />
                        @elseif ($c->name == 'GENDER EQUALITY')
                            <img src="{{ asset('images/sdg/sdg5.gif') }}" class="img-hover img-fluid" />
                        @elseif ($c->name == 'CLEAN WATER AND SANITATION')
                            <img src="{{ asset('images/sdg/sdg6.gif') }}" class="img-hover img-fluid" />
                        @elseif ($c->name == 'AFFORDABLE AND CLEAN ENERGY')
                            <img src="{{ asset('images/sdg/sdg7.gif') }}" class="img-hover img-fluid" />
                        @elseif ($c->name == 'DECENT WORK AND ECONOMIC GROWTH')
                            <img src="{{ asset('images/sdg/sdg8.gif') }}" class="img-hover img-fluid" />
                        @elseif ($c->name == 'INDUSTRY INNOVATION AND INFRASTRUCTURE')
                            <img src="{{ asset('images/sdg/sdg9.gif') }}" class="img-hover img-fluid" />
                        @elseif ($c->name == 'REDUCED INEQUALITIES')
                            <img src="{{ asset('images/sdg/sdg10.gif') }}" class="img-hover img-fluid" />
                        @elseif ($c->name == 'SUSTAINABLE CITIES AND COMMUNITIES')
                            <img src="{{ asset('images/sdg/sdg11.gif') }}" class="img-hover img-fluid" />
                        @elseif ($c->name == 'RESPONSIBLE CONSUMPTION AND PRODUCTION')
                            <img src="{{ asset('images/sdg/sdg12.gif') }}" class="img-hover img-fluid" />
                        @elseif ($c->name == 'CLIMATE ACTION')
                            <img src="{{ asset('images/sdg/sdg13.gif') }}" class="img-hover img-fluid" />
                        @elseif ($c->name == 'LIFE BELOW WATER')
                            <img src="{{ asset('images/sdg/sdg14.gif') }}" class="img-hover img-fluid" />
                        @elseif ($c->name == 'LIFE ON LAND')
                            <img src="{{ asset('images/sdg/sdg15.gif') }}" class="img-hover img-fluid" />
                        @elseif ($c->name == 'PEACE, JUSTICE AND STRONG INSTITUTIONS')
                            <img src="{{ asset('images/sdg/sdg16.gif') }}" class="img-hover img-fluid" />
                        @elseif ($c->name == 'PARTNERSHIPS FOR THE GOALS')
                            <img src="{{ asset('images/sdg/sdg17.gif') }}" class="img-hover img-fluid" />
                        @endif
                    </a>
                </div>
            @endforeach
        </div>
    </section>
@endsection
