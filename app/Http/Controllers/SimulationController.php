<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Area;
use App\Models\Product;
use App\Models\Laboratory;

class SimulationController extends Controller
{
    private $area;
    private $laboratory;
    private $course;
    private $product;

    public function __construct(Area $area, Laboratory $laboratory, Course $course, Product $product)
    {
        $this->area = $area;
        $this->course = $course;
        $this->laboratory = $laboratory;
        $this->product = $product;
    }
    public function index(Request $request)
    {
        $courses = $this->course->get();
        $course_id = $request->get('course_id', null);
        $course = $courses->find($request->get('course_id'));
        $laboratories = (isset($course->laboratories))? $course->laboratories : [] ;

        return view('simulation.index',compact('courses', 'course_id', 'laboratories'));
    }

    public function report(Request $request)
    {
        $course_id = $request->get('course_id');
        $course = Course::find($course_id);

        $laboratoriesId = $request->get('laboratories', []);
        $newLaboratories = $course->laboratories->except($laboratoriesId);
        $oldLaboratories = $course->laboratories->only($laboratoriesId);

        return view('simulation.report',compact('course', 'newLaboratories', 'oldLaboratories'));
    }
}
