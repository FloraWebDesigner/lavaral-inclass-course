@extends('layout.admin')
@section('content')
    <div class="row">
        <div class="col">
            <h2 class="display-2">
                Add a course profile
            </h2>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <form action="{{ route('courses.store')}}" method="POST">
            {{ csrf_field() }}
            {{-- add a token to enhance the security --}}
                <div class="mb-3">
                  <label for="code" class="form-label">Course Code:</label>
                  <input type="text" class="form-control" id="courseID" name="courseID">
                </div>
                <div class="mb-3">
                <label for="name" class="form-label">Course Name:</label>
                <input type="text" class="form-control" id="courseName" name="courseName">
              </div>
              <div class="mb-3">
                <label for="description" class="form-label">Course Description:</label>
                <input type="text" class="form-control" id="description" name="description">
              </div>
              <div class="mb-3">
                <label for="tutor" class="form-label">Tutor:</label>
                <input type="text" class="form-control" id="faculty_id" name="faculty_id">
              </div>

              <label for="student" class="form-label">Select Course</label>
              <select name="student" id="student">
                @foreach ($students as $student)
                <option value="{{ $student -> id }}">{{ $student -> first }}{{ $student -> last }}</option>
                @endforeach
                </select>
              
                <button type="submit" class="btn btn-primary">Add Course</button>
              </form>
        </div>
    </div>
@endsection
