@extends('layouts.appadmin')

@section('content')
<!--page title-->
    <div class="page-title mb-4 d-flex align-items-center">
        <div class="mr-auto">
            <h4 class="weight500 d-inline-block pr-3 mr-3 border-right">Laboratory</h4>
                <nav aria-label="breadcrumb" class="d-inline-block ">
                    <ol class="breadcrumb p-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.laboratory.index')}}">Laboratories</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Laboratory</li>
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
                    <div class="custom-title">Edit Laboratory</div>
                   </div>
                </div>
                    <div class="card-body">
                        <p class="text-muted">
                            Enter the data of the edit Laboratory.
                        </p>
                        <form action="{{route('admin.laboratory.update', $laboratory->id)}}" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <label for="CodeProduct">Name</label>
                                    <input type="text" name="name" value="{{$laboratory->name}}" class="form-control"  aria-describedby="nameHelp" placeholder="Enter name" required>
                            </div>
                            <div class="form-group">
                                <label for="SizeLaboratory">Size</label>
                                <select class="custom-select" name="size" id="">
                                    @foreach (\App\Models\Laboratory::SIZES as $key => $value)
                                        <option value="{{ $key }}" {{ ( $key == $laboratory->size) ? 'selected' : '' }}>
                                            {{ $value }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="AreaLaboratory">Area</label>
                                <input type="text" name="area" class="form-control"  value="{{$laboratory->area}}" aria-describedby="nameHelp" placeholder="Enter area" required>
                            </div>
                            <div class="form-group">
                                <label for="AreaLaboratory">Semester</label>
                                <input type="text" name="semester" class="form-control"  value="{{$laboratory->semester}}" aria-describedby="nameHelp" placeholder="Enter semester" required>
                            </div>
                            <label for="CourseLaboratory">Course</label>

                            @foreach ($areas as $area)
                                <div class="form-group row">
                                    <div class="col-sm-5">{{$area->name}} ({{count($area->courses)}})</div>
                                    <div class="col-sm-7">
                                        @forelse ($area->courses as $course)
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" name="courses[]" value="{{$course->id}}" {{ ( $key == $laboratory->courses->contains($course->id)) ? 'checked' : '' }}> {{$course->name}}
                                                </label>
                                            </div>
                                        @empty
                                            <p>Ops, this area does not have any courses registered :(</p>
                                        @endforelse
                                    </div>
                                </div>
                            @endforeach


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
