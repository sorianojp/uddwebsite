@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row my-5 justify-content-center">
            <div class="col-sm-8">
                @include('layouts.validationmessage')
                <form action="{{ route('departments.store') }}" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="col-sm-5">
                            <input type="text" name="name" class="form-control" placeholder="Name">
                        </div>
                        <div class="col-sm-5">
                            <input type="text" name="website" class="form-control" placeholder="Website">
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
                        <th>Website</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($departments as $department)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $department->name }}</td>
                            <td><a href="{{ $department->website }}">{{ $department->website }}</a></td>
                            <td><a class="btn btn-sm btn-primary"
                                    href="{{ route('departments.courses.index', $department) }}">Courses</a></td>
                        </tr>
                    @endforeach
                </table>
                {!! $departments->links() !!}
            </div>
        </div>
    </div>
@endsection
