<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        $product = Product::orderby('description','asc')->get();
        $pctp = Product::paginate(10);
        return view('admin.product.index', compact('product','pctp'))
        ->with('i',(request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.create');
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
            'code' => ['required','unique:products,code'],
            'description' => ['required','unique:products,description'],
            'accountcode' => ['required'],
            'unitprice' => ['required']
        ]);
  
        Product::create($request->all());
   
        return redirect()->route('admin.product.index')
                        ->with('success','Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('admin.product.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);    
        return view('admin.product.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    { 
        $product = Product::find($id);

        if (isset($product))
        {}
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
  
        return redirect()->route('admin.product.index')
                        ->with('success','Product deleted successfully');
    }

    public function showProducts( Product $products){

        return view('products.show',compact('products'));
    }

    public function indexProducts(){
        
        $products = Product::orderby('description','desc')->paginate();
        return view('products.index', compact('products'))
        ->with('i',(request()->input('page', 1) - 1) * 5);
    }
}
