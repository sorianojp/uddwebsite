@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row my-5 justify-content-center">
            <div class="col-sm-8">
                @include('layouts.validationmessage')
                <form action="{{ route('categories.store') }}" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="col-sm-10">
                            <input type="text" name="name" class="form-control" placeholder="Name">
                        </div>
                        <div class="col-sm-2">
                            <button type="submit" class="btn btn-primary w-100">Create</button>
                        </div>
                    </div>
                </form>
                <table class="table table-light table-striped my-2">
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                    </tr>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $category->name }}</td>
                        </tr>
                    @endforeach
                </table>
                {!! $categories->links() !!}
            </div>
        </div>
    </div>
@endsection
