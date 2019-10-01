@extends('layouts.appadmin')

@section('content')
<!--page title-->
    <div class="page-title mb-4 d-flex align-items-center">
        <div class="mr-auto">
            <h4 class="weight500 d-inline-block pr-3 mr-3 border-right">Product</h4>
                <nav aria-label="breadcrumb" class="d-inline-block ">
                    <ol class="breadcrumb p-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.product.index')}}">Products</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{$product->description}}</li>
                    </ol>
                </nav>
        </div>
    </div>
    <!--/page title-->
    <div class="row content-center">
        <div class="col-xl-8 col-md-8 ">
            <div class="card card-shadow mb-4">
                <div class="card-header border-0">
                    <div class="custom-title-wrap bar-primary">
                    <div class="custom-title">{{$product->description}}</div>
                   </div>
                </div>
                    <div class="card-body">
                        <dl class="row">
                            <dt class="col-sm-3">Code</dt>
                            <dd class="col-sm-9">{{$product->code}}</dd>
                            <dt class="col-sm-3">Description</dt>
                            <dd class="col-sm-9">{{$product->description}}</dd>
                            <dt class="col-sm-3">Account Code</dt>
                            <dd class="col-sm-9">{{$product->accountcode}}</dd>
                            <dt class="col-sm-3">Unit Price</dt>
                            <dd class="col-sm-9">R$ {{$product->unitprice}}</dd>
                            <dt class="col-sm-3">Create at</dt>
                            <dd class="col-sm-9">{{$product->created_at}}</dd>
                        </dl>                        
                        <div class="text-center"> 
                            <form action="{{ route('admin.product.destroy', $product->id)}}" method="post">
                                <a href="{{ route('admin.product.edit', $product->id)}}" class="btn btn-purple rounded-1 text-white" role="button" aria-pressed="true"><i class="fas fa-edit"></i> Edit</a> 
                                    @csrf
                                    @method('DELETE')      
                                    <button type="submit" class="btn btn-danger rounded-1 text-white"><i class="fas fa-trash"></i> Delete</button>                                     
                            </form>                                  
                        </div>
                    </div>
            </div>
        </div>
    </div>

@endsection