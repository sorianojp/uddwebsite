@extends('layouts.app')
<style>
    .img-hover {
        transition: transform 0.3s ease;
        /* Smooth transition effect */
    }

    .img-hover:hover {
        transform: scale(1.2);
        /* Enlarge the image to 120% on hover */
    }
</style>
@section('content')
    <section class="p-5">
        <div class="row w-full">
            <h5 class="text-uppercase bg-primary p-2 rounded-lg">
                <a href="{{ route('allads') }}" class="text-white">
                    Sustainable Development Goals
                </a>
            </h5>
        </div>
        <div class="row">
            @foreach ($categories as $c)
                <div class="col-sm-3 col-md-2 col-lg-1 p-0">
                    <a href="{{ route('sdgs.show', $c) }}">
                        @if ($c->name == 'NO POVERTY')
                            <img src="https://sdg.neda.gov.ph/wp-content/uploads/2022/09/SDG1.gif"
                                class="img-hover img-fluid" />
                        @elseif ($c->name == 'ZERO HUNGER')
                            <img src="https://sdg.neda.gov.ph/wp-content/uploads/2022/09/sdg2.gif"
                                class="img-hover img-fluid" />
                        @elseif ($c->name == 'GOOD HEALTH AND WELL BEING')
                            <img src="https://sdg.neda.gov.ph/wp-content/uploads/2022/09/sdg3.gif"
                                class="img-hover img-fluid" />
                        @elseif ($c->name == 'QUALITY EDUCATION')
                            <img src="https://sdg.neda.gov.ph/wp-content/uploads/2022/09/sdg4.gif"
                                class="img-hover img-fluid" />
                        @elseif ($c->name == 'GENDER EQUALITY')
                            <img src="https://sdg.neda.gov.ph/wp-content/uploads/2022/09/sdg5.gif"
                                class="img-hover img-fluid" />
                        @elseif ($c->name == 'CLEAN WATER AND SANITATION')
                            <img src="https://sdg.neda.gov.ph/wp-content/uploads/2022/09/sdg6.gif"
                                class="img-hover img-fluid" />
                        @elseif ($c->name == 'AFFORDABLE AND CLEAN ENERGY')
                            <img src="https://sdg.neda.gov.ph/wp-content/uploads/2022/09/sdg7.gif"
                                class="img-hover img-fluid" />
                        @elseif ($c->name == 'DECENT WORK AND ECONOMIC GROWTH')
                            <img src="https://sdg.neda.gov.ph/wp-content/uploads/2022/09/sdg8.gif"
                                class="img-hover img-fluid" />
                        @elseif ($c->name == 'INDUSTRY INNOVATION AND INFRASTRUCTURE')
                            <img src="https://sdg.neda.gov.ph/wp-content/uploads/2022/09/sdg9.gif"
                                class="img-hover img-fluid" />
                        @elseif ($c->name == 'REDUCED INEQUALITIES')
                            <img src="https://sdg.neda.gov.ph/wp-content/uploads/2022/09/sdg10.gif"
                                class="img-hover img-fluid" />
                        @elseif ($c->name == 'SUSTAINABLE CITIES AND COMMUNITIES')
                            <img src="https://sdg.neda.gov.ph/wp-content/uploads/2022/09/sdg11.gif"
                                class="img-hover img-fluid" />
                        @elseif ($c->name == 'RESPONSIBLE CONSUMPTION AND PRODUCTION')
                            <img src="https://sdg.neda.gov.ph/wp-content/uploads/2022/09/sdg12.gif"
                                class="img-hover img-fluid" />
                        @elseif ($c->name == 'CLIMATE ACTION')
                            <img src="https://sdg.neda.gov.ph/wp-content/uploads/2022/09/b7b36a4d-abfe-4489-bcf5-83d14f4188f8.gif"
                                class="img-hover img-fluid" />
                        @elseif ($c->name == 'LIFE BELOW WATER')
                            <img src="https://sdg.neda.gov.ph/wp-content/uploads/2022/09/e9ca766c-c66a-442d-a2f7-d5f51eb10c1a.gif"
                                class="img-hover img-fluid" />
                        @elseif ($c->name == 'LIFE ON LAND')
                            <img src="https://sdg.neda.gov.ph/wp-content/uploads/2022/09/38df3226-1992-468b-9093-b7da546c408f.gif"
                                class="img-hover img-fluid" />
                        @elseif ($c->name == 'PEACE, JUSTICE AND STRONG INSTITUTIONS')
                            <img src="https://sdg.neda.gov.ph/wp-content/uploads/2022/09/81400ac1-3bec-4169-9337-55f21453ccf5.gif"
                                class="img-hover img-fluid" />
                        @elseif ($c->name == 'PARTNERSHIPS FOR THE GOALS')
                            <img src="https://sdg.neda.gov.ph/wp-content/uploads/2022/09/4e763a8d-a692-4af3-b8ce-711925233942.gif"
                                class="img-hover img-fluid" />
                        @endif
                    </a>
                </div>
            @endforeach
        </div>
    </section>
@endsection
