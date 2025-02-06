@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row my-5 justify-content-center">
            <div class="col-sm-8">
                <h3><span class="font-weight-bold">Department: </span>{{ $department->name }}</h3>
                @include('layouts.validationmessage')
                <form action="{{ route('departments.courses.store', $department) }}" method="POST">
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
                        <th>Name</th>
                    </tr>
                    @foreach ($department->courses as $course)
                        <tr>
                            <td>{{ $course->name }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
