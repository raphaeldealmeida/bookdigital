<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Area;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::orderby('name','asc')->paginate(10);
        return view('admin.course.index', compact('courses'))
        ->with('i',(request()->input('page', 1) - 1) * 10);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $area = Area::orderby('name','asc')->get();
        return view('admin.course.create',compact('area'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required','unique:courses,name'],
            'modality' => ['required'],
            'area_id' => ['required']
        ]);

        Course::create($request->all());

        return redirect()->route('admin.course.index')
                        ->with('success','Course created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        $areas = Area::all();
        return view('admin.course.show',compact('course','areas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = Course::findOrFail($id);
        $areas = Area::all();
        return view('admin.course.edit',compact('course','areas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        $validatedData = $request->validate([
            'name' => ['required','unique:courses,name,' . $course->id],
            'modality' => ['required'],
            'area_id' => ['required']
        ]);

        $course->update($validatedData);
        return redirect()->route('admin.course.show',[$course->id])
                        ->with('success','Course updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        $course->delete();

        return redirect()->route('admin.course.index')
                        ->with('success','Course deleted successfully');
    }

    public function indexCourses(){

        $courses = Course::orderby('name','asc')->paginate(10);
        return view('courses.index', compact('courses'))
        ->with('i',(request()->input('page', 1) - 1) * 5);
    }

    public function showCourses(Course $courses){
        return view('courses.show',compact('courses'));
    }
}
