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
                        <li class="breadcrumb-item active" aria-current="page">Edit Product</li>
                    </ol>
                </nav>
        </div>
    </div>
    <!--/page title-->
    <div class="row content-center">
        <div class="col-xl-12 col-md-12 ">
            <div class="card card-shadow mb-4">
                <div class="card-header border-0">
                    <div class="custom-title-wrap bar-primary">
                    <div class="custom-title">Edit Product</div>
                   </div>
                </div>
                    <div class="card-body">
                        <p class="text-muted">
                            Enter the data of the edit Product.
                        </p>
                        <form action="{{route('admin.product.store')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="CodeProduct">Code</label>
                                    <input type="number" name="code" value="{{$product->code}}" class="form-control"  aria-describedby="nameHelp" placeholder="Enter code" required>
                            </div>
                            <div class="form-group">
                                <label for="CodeProduct">Name</label>
                                    <input type="text" name="name" value="{{$product->name}}" class="form-control"  aria-describedby="nameHelp" placeholder="Enter name" required>
                            </div>
                            <div class="form-group">
                                <label for="CodeProduct">Description</label>
                                    <input type="text" name="description" value="{{$product->code}}" class="form-control"  aria-describedby="nameHelp" placeholder="Enter description" required>
                            </div>
                            <div class="form-group">
                                <label for="CodeProduct">Account Code</label>
                                    <input type="text" name="accountcode" value="{{$product->accountcode}}" class="form-control"  aria-describedby="nameHelp" placeholder="Enter account code" required>
                            </div>
                            <div class="form-group">
                                <label for="CodeProduct">Unit Price</label>
                                    <input type="text" name="unitprice" value="{{$product->unitprice}}" class="form-control"  aria-describedby="nameHelp" placeholder="Enter unit price" required>
                            </div>
                            <div class="text-left">
                                <button type="submit" class="btn btn-success">Update</button>
                            </div>
                        </form>
                        @if ($errors->any())
                            <div class="alert alert-danger m-2">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
            </div>
        </div>
    </div>

@endsection
