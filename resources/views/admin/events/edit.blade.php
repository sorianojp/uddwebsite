@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center my-5">
            <div class="col-sm-8">
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
                <form action="{{ route('events.update', $event->id) }}" method="POST" enctype='multipart/form-data'>
                    @csrf
                    @method('PUT') <!-- Use PUT for updating the event -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Title:</label>
                                <input type="text" name="title" class="form-control" value="{{ $event->title }}"
                                    placeholder="Enter Title">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Category</label>
                                <select name="category_id" class="form-control">
                                    <option value="" disabled>Select Category</option>
                                    <option value="">N/A</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ $event->category_id == $category->id ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Content:</label>
                                <textarea id="summernote" class="form-control" name="content">{{ $event->content }}</textarea>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Header Image: <span class="font-italic">1000x600 Pixel Only</span></label>
                                <input type="file" name="image" class="form-control">
                                <img src="/image/{{ $event->image }}" alt="Event Image" class="mt-2" width="100">
                                <!-- Show current image -->
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Date:</label>
                                <input type="date" name="date" class="form-control" value="{{ $event->date }}">
                            </div>
                        </div>
                        <div class="col-sm-12 text-center my-3">
                            <button type="submit" class="btn btn-sm btn-primary">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
