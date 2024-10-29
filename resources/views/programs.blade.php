@extends('layouts.app')
@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-sm-12">
                <h5 class="text-uppercase bg-primary p-2 text-white rounded-lg">Programs Offerings</h5>
                <div class="accordion">
                    @foreach ($programs as $p)
                        <div>
                            <button class="btn btn-link text-left collapsed" type="button" data-toggle="collapse"
                                data-target="#collapse{{ $p->id }}">
                                {{ $p->name }}
                            </button>
                        </div>
                        <div id="collapse{{ $p->id }}" class="collapse">
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
        </div>
    </div>
@endsection
