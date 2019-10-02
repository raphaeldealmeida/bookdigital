@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card card-shadow mb-4">
            <div class="card-header border-0">
                <div class="custom-title-wrap bar-primary">
                    New Simularion
                </div>
            </div>
            <div class="card-body- p-3">
                <div class="form-group">
                    <label for="">Select Course</label>
                        <select class="custom-select" name="course_id" id="">
                            @foreach ($courses as $course)
                                <option value="{{$course->id}}">{{$course->name}}</option>
                             @endforeach
                        </select>
                </div>
                <div class="form-group">
                    @foreach($courses->first()->laboratories() as $laboratory)
                        {{ dd($laboratory) }}
                    @endforeach
                    <label for="">Which Labs are already deployed in your unit?</label>

                </div>
        </div>
    </div>
</div>
@endsection
