@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row my-5">
        <div class="col-lg-12 my-2">
            <a class="btn btn-sm btn-primary" href="{{ route('tops.create') }}">Add</a>
        </div>
        <div class="col-sm-12">
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    {{ $message }}
                </div>
            @endif
            <table class="table table-light table-striped">
                <tr>
                    <th>No</th>
                    <th>Name</th>
                </tr>
                @foreach ($tops as $t)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $t->name }}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
