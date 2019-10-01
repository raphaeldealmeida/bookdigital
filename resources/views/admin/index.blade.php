@extends('layouts.appadmin')

@section('content')
    <div class="row">
            <div class="col-xl-6 col-md-6">
                <div class="card card-shadow mb-6">
                    <div class="card-header border-0">
                        <div class="custom-title-wrap bar-warning">
                            <div class="custom-title">All Area</div>
                            <!--<div class="custom-post-title">Card subtitle goes here</div>-->
                            </div>
                        </div>
                            <div class="card-body">
                                <div class="col">
                                    <div class="card mb-6 bg-warning">
                                        <div class="card-body">
                                            <div class="media d-flex align-items-center ">
                                                <div class="mr-4 rounded-circle bg-white sr-icon-box text-warning">
                                                    <i class="far fa-file-alt"></i>
                                                </div>
                                                <div class="media-body text-light">
                                                <h4 class="text-uppercase mb-0 ">{{$areas->count()}}</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                </div>
            </div>
        <div class="col-xl-6 col-md-6">
            <div class="card card-shadow mb-6">
                <div class="card-header border-0">
                    <div class="custom-title-wrap bar-success">
                        <div class="custom-title">All Courses</div>
                        <!--<div class="custom-post-title">Card subtitle goes here</div>-->
                        </div>
                    </div>
                        <div class="card-body">
                            <div class="col">
                                <div class="card mb-6 bg-success">
                                    <div class="card-body">
                                        <div class="media d-flex align-items-center ">
                                            <div class="mr-4 rounded-circle bg-white sr-icon-box text-success">
                                                <i class="fas fa-newspaper success"></i>
                                            </div>
                                            <div class="media-body text-light">
                                                <h4 class="text-uppercase mb-0 ">{{$courses->count()}}</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-xl-6 col-md-6">
            <div class="card card-shadow mb-6">
                <div class="card-header border-0">
                    <div class="custom-title-wrap bar-primary">
                        <div class="custom-title">All Laboratories</div>
                        <!--<div class="custom-post-title">Card subtitle goes here</div>-->
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="col">
                            <div class="card mb-6 bg-primary">
                                <div class="card-body">
                                    <div class="media d-flex align-items-center ">
                                        <div class="mr-4 rounded-circle bg-white sr-icon-box text-primary">
                                            <i class="fas fa-vial"></i>
                                        </div>
                                        <div class="media-body text-light">
                                            <h4 class="text-uppercase mb-0 ">{{$laboratories->count()}}</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <div class="col-xl-6 col-md-6">
            <div class="card card-shadow mb-6">
                <div class="card-header border-0">
                    <div class="custom-title-wrap bar-danger">
                        <div class="custom-title">All Products</div>
                        <!--<div class="custom-post-title">Card subtitle goes here</div>-->
                        </div>
                    </div>
                        <div class="card-body">
                            <div class="col">
                                <div class="card mb-6 bg-danger">
                                    <div class="card-body">
                                        <div class="media d-flex align-items-center ">
                                            <div class="mr-4 rounded-circle bg-white sr-icon-box text-danger">
                                                <i class="fas fa-dolly"></i>
                                            </div>
                                            <div class="media-body text-light">
                                                <h4 class="text-uppercase mb-0 ">{{$products->count()}}</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
        </div>
    </div>
@endsection
