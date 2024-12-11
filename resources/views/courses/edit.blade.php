@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col">
        <h1 class="display-2">Edit course info</h1>
    </div>
</div>
<div class="row">
  <div class="col">
    <form action="{{ route('courses.update', $course -> id) }}" method="POST">
     @method('PUT')
        {{ csrf_field() }}
        <div class="mb-3">
          <label for="course_name" class="form-label">Course Name:</label>
          <input type="text" class="form-control" id="course_name" name="course_name" value="{{ $course -> course_name}}">
        </div>
        <div class="mb-3">
            <label for="course_index" class="form-label">Course Index:</label>
            <input type="text" class="form-control" id="course_index" name="course_index" value="{{ $course -> course_index }}">
        </div>
        <div class="mb-3">
            <label for="course_desc" class="form-label">Course Description:</label>
            <input type="text" class="form-control" id="course_desc" name="course_desc" value="{{ $course -> course_description }}">
        </div>
        <button type="submit" class="btn btn-primary">Update Course</button>
    </form>
  </div>
</div>
@endsection
