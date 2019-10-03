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
        if($course_id = $request->get('course_id')){
            $course = $courses->find($course_id);
            $courses->prepend($course);
            $courses = $courses->unique();
        }

        return view('simulation.index',compact('courses'));
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
