@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card card-shadow mb-4">
            <div class="card-header border-0">
                <div class="custom-title-wrap bar-primary">
                    All Courses
                </div>
            </div>
            <div class="card-body- p-3">
                 @if(count($courses) >= 1)
                <div class="table-responsive p-3" >
                    <table id="data_table" class="table table-bordered table-striped" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Modality</th>
                                <th>Area</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($courses as $course)
                            <tr>
                                <td>{{$course->name}}</td>
                                <td>{{$course->modality}}</td>
                                <td>{{$course->area->name}}</td>
                                <td>
                                    <a href="{{ url('courses', $course->id)}}" class="btn btn-primary btn-sm rounded-1 text-white" role="button" aria-pressed="true"><i class="fas fa-eye"></i> Show</a>
                                       </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @else
                <dl class="row p-3">
                        <dt class="col-sm-3 alert alert-info" role="alert">I don't have any records!</dt>
                    </dl>
                @endif
                {{$courses->links()}}
            </div>
        </div>
    </div>
</div>
@endsection
