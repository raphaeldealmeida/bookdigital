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
    public function index()
    {
        $courses = $this->course->get();
        return view('simulation.index',compact('courses'));

    }

}
