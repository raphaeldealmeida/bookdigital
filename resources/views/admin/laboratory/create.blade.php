@extends('layouts.appadmin')

@section('content')
<!--page title-->
    <div class="page-title mb-4 d-flex align-items-center">
        <div class="mr-auto">
            <h4 class="weight500 d-inline-block pr-3 mr-3 border-right">Laboratory</h4>
                <nav aria-label="breadcrumb" class="d-inline-block ">
                    <ol class="breadcrumb p-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.laboratory.index')}}">Laboratory</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Create New Laboratory</li>
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
                    <div class="custom-title">Create New Laboratory</div>
                   </div>
                </div>
                    <div class="card-body">
                        <p class="text-muted">
                            Fill in the new lab data.
                        </p>
                        <form action="{{route('admin.laboratory.store')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="NameLaboratory">Name</label>
                                    <input type="text" name="name" class="form-control"  aria-describedby="nameHelp" placeholder="Enter name" required>
                            </div>
                            <div class="form-group">
                                <label for="AreaLaboratory">Area</label>
                                    <input type="text" name="area" class="form-control"  aria-describedby="nameHelp" placeholder="Enter area" required>
                            </div>
                            <div class="form-group">
                                <label for="SizeLaboratory">Size</label>
                                    <select class="custom-select" name="size" id="">
                                        <option value="P">P (20 alunos)</option>
                                        <option value="M">M (30 alunos)</option>
                                        <option value="G">G (40 alunos)</option>
                                    </select>
                            </div>
                            <label for="CourseLaboratory">Course</label>

                            @foreach ($areas as $area)
                                <div class="form-group row">
                                    <div class="col-sm-5">{{$area->name}} ({{count($area->courses)}})</div>
                                    <div class="col-sm-7">
                                        @forelse ($area->courses as $course)
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" name="courses[]" value="{{$course->id}}"> {{$course->name}}
                                                </label>
                                            </div>
                                        @empty
                                            <p>Ops, this area does not have any courses registered :(</p>
                                        @endforelse
                                    </div>
                                </div>
                            @endforeach

                            <div class="form-group">
                                <label for="AreaLaboratory">Semester</label>
                                    <input type="text" name="semester" class="form-control"  aria-describedby="nameHelp" placeholder="Enter semester" required>
                            </div>
                            <div class="text-left">
                                <button type="submit" class="btn btn-success">Create</button>
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
