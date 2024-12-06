@extends('layout.admin')
@section('content')
<div class="row">
    <div class="col">
        <div class="display-2">All Students</div>
    </div>
</div>
<div class="row">
    @foreach ($students as $student)
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        {{ $student -> fname }}
                    </h5>
                    <a href="{{ route('students.edit', $student -> id) }}">Edit</a>
                    <a href="{{ route('students.trash', $student -> id) }}">Delete</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection