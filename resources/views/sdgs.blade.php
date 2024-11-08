@extends('layouts.app')
@section('content')
    <section class="p-5">
        <h5 class="text-uppercase bg-primary p-2 rounded-lg">
            <a href="{{ route('allads') }}" class="text-white">
                Sustainable Development Goals
            </a>
        </h5>
        <div class="row">
            @foreach ($categories as $c)
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <a href="{{ route('sdgs.show', $c) }}">
                        @if ($c->name == 'NO POVERTY')
                            <img src="https://sdg.neda.gov.ph/wp-content/uploads/2022/09/SDG1.gif" width="100" />
                        @elseif ($c->name == 'ZERO HUNGER')
                            <img src="https://sdg.neda.gov.ph/wp-content/uploads/2022/09/sdg2.gif" width="100" />
                        @elseif ($c->name == 'GOOD HEALTH AND WELL-BEING')
                            <img src="https://sdg.neda.gov.ph/wp-content/uploads/2022/09/sdg3.gif" width="100" />
                        @elseif ($c->name == 'QUALITY EDUCATION')
                            <img src="https://sdg.neda.gov.ph/wp-content/uploads/2022/09/sdg4.gif" width="100" />
                        @elseif ($c->name == 'GENDER EQUALITY')
                            <img src="https://sdg.neda.gov.ph/wp-content/uploads/2022/09/sdg5.gif" width="100" />
                        @elseif ($c->name == 'CLEAN WATER AND SANITATION')
                            <img src="https://sdg.neda.gov.ph/wp-content/uploads/2022/09/sdg6.gif" width="100" />
                        @elseif ($c->name == 'AFFORDABLE AND CLEAN ENERGY')
                            <img src="https://sdg.neda.gov.ph/wp-content/uploads/2022/09/sdg7.gif" width="100" />
                        @elseif ($c->name == 'DECENT WORK AND ECONOMIC GROWTH')
                            <img src="https://sdg.neda.gov.ph/wp-content/uploads/2022/09/sdg8.gif" width="100" />
                        @elseif ($c->name == 'INDUSTRY INNOVATION AND INFRASTRUCTURE')
                            <img src="https://sdg.neda.gov.ph/wp-content/uploads/2022/09/sdg8.gif" width="100" />
                        @elseif ($c->name == 'REDUCED INEQUALITIES')
                            <img src="https://sdg.neda.gov.ph/wp-content/uploads/2022/09/sdg10.gif" width="100" />
                        @elseif ($c->name == 'SUSTAINABLE CITIES AND COMMUNITIES')
                            <img src="https://sdg.neda.gov.ph/wp-content/uploads/2022/09/sdg11.gif" width="100" />
                        @elseif ($c->name == 'RESPONSIBLE CONSUMPTION AND PRODUCTION')
                            <img src="https://sdg.neda.gov.ph/wp-content/uploads/2022/09/sdg12.gif" width="100" />
                        @elseif ($c->name == 'CLIMATE ACTION INFRASTRUCTURE')
                            <img src="https://sdg.neda.gov.ph/wp-content/uploads/2022/09/b7b36a4d-abfe-4489-bcf5-83d14f4188f8.gif"
                                width="100" />
                        @elseif ($c->name == 'LIFE BELOW WATER')
                            <img src="https://sdg.neda.gov.ph/wp-content/uploads/2022/09/e9ca766c-c66a-442d-a2f7-d5f51eb10c1a.gif"
                                width="100" />
                        @elseif ($c->name == 'LIFE ON LAND')
                            <img src="https://sdg.neda.gov.ph/wp-content/uploads/2022/09/38df3226-1992-468b-9093-b7da546c408f.gif"
                                width="100" />
                        @elseif ($c->name == 'PEACE, JUSTICE AND STRONG INSTITUTIONS')
                            <img src="https://sdg.neda.gov.ph/wp-content/uploads/2022/09/81400ac1-3bec-4169-9337-55f21453ccf5.gif"
                                width="100" />
                        @elseif ($c->name == 'PARTNERSHIPS FOR THE GOALS')
                            <img src="https://sdg.neda.gov.ph/wp-content/uploads/2022/09/4e763a8d-a692-4af3-b8ce-711925233942.gif"
                                width="100" />
                        @endif
                    </a>
                    {{-- <a href="{{ route('sdgs.show', $c) }}">{{ ++$i }} -
                            {{ $c->name }}</a> --}}
                </div>
            @endforeach
        </div>
    </section>
@endsection
