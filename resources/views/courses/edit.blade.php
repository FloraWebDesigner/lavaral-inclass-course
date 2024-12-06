@extends('layout.admin')
@section('content')
    <div class="row">
        <div class="col">
            <h2 class="display-2">
                Edit a course profile
            </h2>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <form action="{{ route('courses.update', $course ->id)}}" method="POST">
              @method('PUT')
            {{ csrf_field() }}
            {{-- add a token to enhance the security --}}
                <div class="mb-3">
                  <label for="code" class="form-label">Course Code:</label>
                  <input type="text" class="form-control" id="code" name="code" value="{{$course ->code}}">
                </div>
                <div class="mb-3">
                  <label for="name" class="form-label">Course Name:</label>
                  <input type="text" class="form-control" id="name" name="name" value="{{$course ->name}}">
              </div>
              <div class="mb-3">
                <label for="description" class="form-label">Course Description:</label>
                <input type="text" class="form-control" id="description" name="description" value="{{$course ->description}}">
              </div>
              <div class="mb-3">
                <label for="tutor" class="form-label">Tutor:</label>
                <input type="text" class="form-control" id="tutor" name="tutor" value="{{$course ->tutor}}">
              </div>
                <button type="submit" class="btn btn-primary">Update Course</button>
              </form>
        </div>
    </div>
@endsection
