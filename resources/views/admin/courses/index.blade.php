@extends('layouts.app')
@section('content')
<div class="container">
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif
    <div class="row my-5">
        <div class="col-sm-12 text-center mb-4">
            <h3><span class="font-weight-bold">Department: </span>{{ $department->name }}</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <form action="{{ route('departments.courses.store', $department)}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Name:</label>
                            <input type="text" name="name" class="form-control" placeholder="Name">
                        </div>
                    </div>
                    <div class="col-sm-12 text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-sm-8">
            <table class="table table-light table-striped">
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
