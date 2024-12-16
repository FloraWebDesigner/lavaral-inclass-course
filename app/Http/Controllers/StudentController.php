<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Course;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('students.index',[
            'students' => Student::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create')
        ->with('courses',Course::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStudentRequest $request)
    {
        student::create($request->validated());
        return redirect() -> route('students.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
    $courses = Course::all();
    $selectedCourses = $student->courses->pluck('id')->toArray(); 
    return view('students.edit', compact('student', 'courses', 'selectedCourses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {
        $student -> update($request->validated());
        return redirect() -> route('students.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function trash($id)
    {
        Student::destroy($id);
        return redirect() -> route('students.trashed');
    }

    public function trashed()
    {
        $students=Student::onlyTrashed()->get();
        return view('students.trashed',['students'=>$students]);
    }

    public function destroy($id)
    {
        $student = Student::withTrashed() -> where ('id',$id) -> first();
        $student -> forceDelete();
        return redirect() -> route('students.index');
    }

    public function restore($id){
        $student = Student::withTrashed() -> where ('id',$id) -> first();
        $student ->restore();
        return redirect()->route('students.index');
    }
}
