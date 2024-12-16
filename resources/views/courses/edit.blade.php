@extends('layout.admin')
@section('content')
    <div class="row">
        <div class="col">
            <h2 class="display-2">
                Edit a course profile: {{ $course->courseName }}
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
                  <label for="courseID" class="form-label">Course Code:</label>
                  <input type="text" class="form-control" id="courseID" name="courseID" value="{{$course ->courseID}}">
                </div>
                <div class="mb-3">
                  <label for="courseName" class="form-label">Course Name:</label>
                  <input type="text" class="form-control" id="courseName" name="courseName" value="{{$course ->courseName}}">
              </div>
              <div class="mb-3">
                <label for="description" class="form-label">Course Description:</label>
                <input type="text" class="form-control" id="description" name="description" value="{{$course ->description}}">
              </div>
              <div class="mb-3">
                <label for="faculty_id" class="form-label">Facility:</label>
                <input type="text" class="form-control" id="faculty_id" name="faculty_id" value="{{$course ->tutor}}">
              </div>
              <label for="students" class="form-label">Select Students</label>
    <select name="students[]" id="students" class="form-control" multiple>
        @foreach ($students as $student)
            <option value="{{ $student->id }}" 
                {{ in_array($student->id, $selectedStudents) ? 'selected' : '' }}>
                {{ $student->fname }}  {{ $student->lname }}
            </option>
        @endforeach
    </select>
                <button type="submit" class="btn btn-primary">Update Course</button>
              </form>
        </div>
    </div>
@endsection
