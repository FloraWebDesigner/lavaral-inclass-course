@extends('layout.admin')
@section('content')
<div class="row">
    <div class="col">
        <div class="display-2">All Courses</div>
    </div>
</div>
<div class="row">
    @foreach ($courses as $course)
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        {{ $course -> courseID }}
                    </h5>
                    <p class="card-text">{{ $course -> courseName }}</p>
                    
                    <a href="{{ route('courses.edit', $course -> id) }}">Edit</a>
                    <a href="{{ route('courses.trash', $course -> id) }}">Delete</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection