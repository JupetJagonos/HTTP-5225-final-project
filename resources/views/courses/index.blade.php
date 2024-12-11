@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col">
        <h1 class="display-2">All Courses</h1>
        <hr>
        <a href="{{ route('courses.create') }}">Create New Course</a>
        <hr>
        <a href="{{ route('courses.trashed') }}">List of Trashed Courses</a>
        <hr>
    </div>
</div>
<div class="row">
    @foreach($courses as $course)
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $course -> course_name }}</h5>
                <hr>
                <a href="{{  route('courses.edit', $course -> id) }}">Edit</a>
                <a href="{{  route('courses.trash', $course -> id) }}">Delete</a>
            </div>

        </div>
    </div>
    @endforeach
</div>
@endsection
