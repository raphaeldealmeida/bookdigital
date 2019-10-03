@extends('layouts.app')

@section('content')
    <!--/page title-->
    <div class="row content-center">
            <div class="col-xl-8 col-md-8 ">
                <div class="card card-shadow mb-4">
                    <div class="card-header border-0">
                        <div class="custom-title-wrap bar-primary">
                        <div class="custom-title">{{$laboratory->name}}</div>
                       </div>
                    </div>
                        <div class="card-body">
                            <dl class="row">
                                <dt class="col-sm-3">Name: </dt>
                                    <dd class="col-sm-9">{{$laboratory->name}}</dd>
                                <dt class="col-sm-3">Area: </dt>
                                    <dd class="col-sm-9">@float($laboratory->area) M²</dd>
                                <dt class="col-sm-3">Size: </dt>
                                    <dd class="col-sm-9">{{$laboratory->size}}</dd>
                                <dt class="col-sm-3">Semester: </dt>
                                 <dd class="col-sm-9">{{$laboratory->semester}}</dd>
                            </dl>
                            <dl class="row">
                                <p class="col-sm-9 text-secondary">All courses comprising this lab. </p>
                                    @foreach ($laboratory->courses as $course)
                                        <dt class="col-sm-9">{{$course->name}}</dt>
                                    @endforeach
                            </dl>
                        </div>
                </div>
            </div>
        </div>
@endsection
