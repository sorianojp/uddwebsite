@extends('layouts.app')


@section('content')
<div class="container">


<div class="row my-5 justify-content-center">
<div class="col-sm-12">
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
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
</div>
<div class="col-sm-4">
    <form action="{{ route('departments.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" name="name" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-sm-12 text-center">
                    <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </div>
    </form>
</div>
<div class="col-sm-8">
        <table class="table table-light table-striped">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
            @foreach ($departments as $department)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $department->name }}</td>
                <td><a class="btn btn-sm btn-primary" href="{{ route('departments.courses.index', $department) }}">Courses</a></td>
            </tr>
            @endforeach
        </table>
        {!! $departments->links() !!}
    </div>
</div>
</div>
@endsection
