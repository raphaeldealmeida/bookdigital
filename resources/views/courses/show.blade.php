@extends('layouts.app')

@section('content')
<!--page title-->
<div class="page-title mb-4 d-flex align-items-center">
    <div class="mr-auto">
        <h4 class="weight500 d-inline-block pr-3 mr-3 border-right">Courses</h4>
            <nav aria-label="breadcrumb" class="d-inline-block ">
                <ol class="breadcrumb p-0">
                    <li class="breadcrumb-item"><a href="{{ url('index')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('courses')}}">Courses</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Courses</li>
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
                        <div class="custom-title">{{$courses->name}}</div>
                       </div>
                    </div>
                        <div class="card-body">
                            <dl class="row">
                                <dt class="col-sm-3">Name: </dt>
                                    <dd class="col-sm-9">{{$courses->name}}</dd>
                                <dt class="col-sm-3">Modality: </dt>
                                    <dd class="col-sm-9">{{$courses->modality}}</dd>
                                <dt class="col-sm-3">Area: </dt>
                                    <dd class="col-sm-9">{{$courses->area->name}}</dd>
                            </dl>
                            <dl class="row">
                                <dt class="col-sm-3">Course Labs</dt>
                            </dl>
                        </div>
                </div>
            </div>
        </div>
@endsection
