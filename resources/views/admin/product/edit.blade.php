@extends('layouts.appadmin')
@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha256-Kg2zTcFO9LXOc7IwcBx1YeUBJmekycsnTsq2RuFHSZU=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function($){
    $('input[name="unitprice"]').mask('000.000.000.000.000,00', {reverse: true});
            });
    </script>
@endsection
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
        <div class="col-xl-8 col-md-8 ">
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
                        <form action="{{route('admin.product.update',$product->id)}}" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <label for="CodeProduct">Code</label>
                                    <input type="number" name="code" value="{{$product->code}}" class="form-control"  aria-describedby="nameHelp" placeholder="Enter code" required>
                            </div>
                            <div class="form-group">
                                <label for="CodeProduct">Description</label>
                                    <input type="text" name="description" value="{{$product->description}}" class="form-control"  aria-describedby="nameHelp" placeholder="Enter description" required>
                            </div>
                            <div class="form-group">
                                <label for="CodeProduct">Account Code</label>
                                    <input type="text" name="accountcode" value="{{$product->accountcode}}" class="form-control"  aria-describedby="nameHelp" placeholder="Enter account code" required>
                            </div>
                            <div class="form-group">
                                <label for="CodeProduct">Unit Price</label>
                                    <input type="text" name="unitprice" value="@float($product->unitprice)" class="form-control"  aria-describedby="nameHelp" placeholder="Enter unit price" required>
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
