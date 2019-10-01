<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Area;
use App\Models\Laboratory;
use App\Models\Product;
use Illuminate\Http\Request;

class LaboratoryController extends Controller
{
    //instanciando as models em construtor

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





    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laboratory = Laboratory::orderby('name','asc')->paginate(10);
        return view('admin.laboratory.index', compact('laboratory'))
        ->with('i',(request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $areas = $this->area::get();



        //$courses = Course::all();


        return view('admin.laboratory.create',compact('areas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all())                  ;

        $request->validate([
            'name' => ['required'],
            'area' => ['required'],
            'size' => ['required'],
            'courses' => ['required'],
            'semester'=> ['required']
        ]);
        $laboratory = $this->laboratory::create($request->all());
        $laboratory->courses()->sync($request->input('courses'));

        return redirect()->route('admin.laboratory.index')
                        ->with('success','Laboratory created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Laboratory  $laboratory
     * @return \Illuminate\Http\Response
     */
    public function show(Laboratory $laboratory)
    {
        $course = $this->course::get();
        $product = $this->product::get();
        return view('admin.laboratory.show',compact('laboratory','product','course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Laboratory  $laboratory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $laboratory = $this->laboratory->find($id);

        return view('admin.laboratory.show', compact('laboratory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Laboratory  $laboratory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Laboratory $laboratory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Laboratory  $laboratory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Laboratory $laboratory)
    {
        $laboratory->delete();

        return redirect()->route('admin.laboratory.index');
    }

    public function indexLaboratories(){

        $laboratories = Laboratory::orderby('name','asc')->paginate(10);
        return view('laboratories.index', compact('laboratories'))
        ->with('i',(request()->input('page', 1) - 1) * 5);
    }

    public function showLaboratories(Laboratory $laboratory){

        return view('laboratories.show',compact('laboratory'));
    }

    public function autocompleteproduct(Laboratory $laboratory){
        $data = $this->product::select ('description')
            ->where("description","LIKE","%{request->input('query')}%")
            ->get();
            return response()->json($data);

    }

}
