@extends('layouts.app')

@section('content')
    <!--/page title-->
    <div class="row content-center">
            <div class="col-xl-8 col-md-8 ">
                <div class="card card-shadow mb-4">
                    <div class="card-header border-0">
                        <div class="custom-title-wrap bar-primary">
                        <div class="custom-title">{{$products->description}}</div>
                       </div>
                    </div>
                        <div class="card-body">
                            <dl class="row">
                                <dt class="col-sm-3">Code: </dt>
                                    <dd class="col-sm-9">{{$products->code}}</dd>
                                <dt class="col-sm-3">Description: </dt>
                                    <dd class="col-sm-9">{{$products->description}}</dd>
                                <dt class="col-sm-3">Account Code: </dt>
                                    <dd class="col-sm-9">{{$products->accountcode}}</dd>
                                <dt class="col-sm-3">Unit Price: </dt>
                                 <dd class="col-sm-9">R$ @float($products->unitprice)</dd>
                            </dl>
                        </div>
                </div>
            </div>
        </div>
@endsection
