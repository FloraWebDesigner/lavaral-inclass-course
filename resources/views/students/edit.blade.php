@extends('layout.admin')
@section('content')
    <div class="row">
        <div class="col">
            <h2 class="display-2">
                Edit a student profile
            </h2>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <form action="{{ route('students.update', $student ->id)}}" method="POST">
              @method('PUT')
            {{ csrf_field() }}
            {{-- add a token to enhance the security --}}
                <div class="mb-3">
                  <label for="fname" class="form-label">First Name</label>
                  <input type="text" class="form-control" id="fname" name="fname" value="{{$student ->fname}}">
                </div>
                <div class="mb-3">
                <label for="lname" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lname" name="lname" value="{{$student ->lname}}">
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{$student ->email}}">
              </div>
              <div class="mb-3">
                <label for="course" class="form-label">Select Courses</label>
<select name="course[]" id="course" class="form-control" multiple>
    @foreach ($courses as $course)
        <option value="{{ $course->id }}" 
            {{ in_array($course->id, $selectedCourses) ? 'selected' : '' }}>
            {{ $course->courseName }}
        </option>
    @endforeach
</select>
                </div>
                <button type="submit" class="btn btn-primary">Update Student</button>
              </form>
        </div>
    </div>
@endsection
