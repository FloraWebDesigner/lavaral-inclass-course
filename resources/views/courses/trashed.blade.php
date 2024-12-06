@extends('layout.admin')
@section('content')
<div class="row">
    <div class="col">
        <div class="display-2">Trashed Courses</div>
    </div>
</div>
<div class="row">
    @foreach ($courses as $course)
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        {{ $course -> code }}
                    </h5>
                    <a href="{{ route('courses.restore', $course -> id) }}">Restore</a>
                    <a href="{{ route('courses.destroy', $course -> id) }}">Delete Permantently</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection