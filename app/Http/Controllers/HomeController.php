<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Area;
use App\Models\Product;
use App\Models\Laboratory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $areas = Area::all();
        $products  = Product::all();
        $courses  = Course::all();
        $laboratories = Laboratory::all();
        return view('admin.index',compact('areas','products','courses','laboratories'));
    }
}
