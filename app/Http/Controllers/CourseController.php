<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Student;
use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('courses.index',[
            'courses' => Course::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('courses.create')
        ->with('students',Student::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCourseRequest $request)
    {
        course::create($request->validated());
        return redirect() -> route('courses.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        $students = Student::all();
    $selectedStudents = $course->students->pluck('id')->toArray(); 
    return view('courses.edit', compact('course', 'students', 'selectedStudents'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCourseRequest $request, Course $course)
    {  
        $course -> update($request->validated());
        return redirect() -> route('courses.index');
    }

    public function trash($id)
    {
        Course::destroy($id);
        return redirect() -> route('courses.trashed');
    }

    public function trashed()
    {
        $courses=Course::onlyTrashed()->get();
        return view('courses.trashed',['courses'=>$courses]);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        $course = Course::withTrashed() -> where ('id',$id) -> first();
        $course -> forceDelete();
        return redirect() -> route('courses.index');
    }

    public function restore($id){
        $course = Course::withTrashed() -> where ('id',$id) -> first();
        $course ->restore();
        return redirect()->route('courses.index');
    }
}
