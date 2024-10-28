@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row my-5 mx-5">
            <div class="col-sm-12">
                <div class="row">
                    <h3>Sustainable Development Goals</h3>
                </div>
                <div class="row">
                    @foreach ($categories as $c)
                        <div class="border p-2 my-1 mx-1 bg-secondary text-white">
                            <div>
                                <span class="h2 font-weight-bold">{{ ++$i }}</span>
                                <a href="{{ route('sdgs.show', $c) }}" class="text-white"><span
                                        class="h5">{{ $c->name }}</span></a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
