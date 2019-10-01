@extends('layouts.appadmin')

@section('content')
<!--page title-->
    <div class="page-title mb-4 d-flex align-items-center">
        <div class="mr-auto">
            <h4 class="weight500 d-inline-block pr-3 mr-3 border-right">Course</h4>
                <nav aria-label="breadcrumb" class="d-inline-block ">
                    <ol class="breadcrumb p-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.course.index')}}">Course </a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Course</li>
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
                    <div class="custom-title">Edit Course</div>
                   </div>
                </div>
                    <div class="card-body">
                        <p class="text-muted">
                            Edit the course.
                        </p>
                        <form action="{{route('admin.course.update',$course->id)}}" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <label for="NameCourse">Name</label>
                                    <input type="text" name="name" value="{{$course->name}}" class="form-control"  aria-describedby="nameHelp" placeholder="Enter name">
                            </div>
                            <div class="form-group">
                                <label for="ModalityCourse">Modality</label>
                                    <input type="text" name="modality" value ="{{$course->modality}}"class="form-control"  aria-describedby="nameHelp" placeholder="Enter modality">
                            </div>
                            <div class="form-group">
                                <label for="">Select Area</label>
                                <select class="custom-select" name="area_id" id="">
                                    @foreach ($areas as $area)
                                        <option value="{{$area->id}}">{{$area->name}}</option>
                                    @endforeach
                                </select>
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
