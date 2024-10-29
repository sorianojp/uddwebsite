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
                    <div>
                        <a href="{{ route('sdgs.show', $c) }}">{{ ++$i }} - {{ $c->name }}</a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
