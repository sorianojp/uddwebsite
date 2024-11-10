@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row my-5">
            <div class="col-lg-12 my-2">
                <a class="btn btn-sm btn-primary" href="{{ route('news.create') }}">Create News</a>
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
                    @foreach ($news as $n)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $n->title }}</td>
                            <td>{{ $n->user->name }}</td>
                            <td>
                                <a class="btn btn-sm btn-secondary btn-block" href="{{ route('news.show', $n) }}">Show</a>
                                <a class="btn btn-sm btn-secondary btn-block" href="{{ route('news.edit', $n) }}">Edit</a>
                                @if ($n->featured == 1)
                                    <form action="{{ route('unfeaturenews', $n) }}" method="POST" class="my-2">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger btn-block">Unfeature</button>
                                    </form>
                                @else
                                    <a
                                        href="{{ route('featurenews', $n) }}"class="btn btn-sm btn-success btn-block">Feature</a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
