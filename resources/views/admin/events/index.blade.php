@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row my-5">
        <div class="col-lg-12 my-2">
            <a class="btn btn-sm btn-primary" href="{{ route('events.create') }}">Create Event</a>
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
                    <th>Title</th>
                    <th>Author</th>
                    <th style="width:200px">Action</th>
                </tr>
                @foreach ($events as $e)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $e->title }}</td>
                    <td>{{ $e->user->name }}</td>
                    <td>
                        <a class="btn btn-sm btn-info btn-block" href="{{ route('events.show', $e->id) }}">Show</a>
                        @if($e->featured == 1)
                        <form action="{{ route('unfeatureevent', $e) }}" method="POST" class="my-2">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger btn-block">Unfeature</button>
                        </form>
                        @else
                        <a href="{{ route('featureevent', $e) }}"class="btn btn-sm btn-success btn-block">Feature</a>
                        @endif
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
