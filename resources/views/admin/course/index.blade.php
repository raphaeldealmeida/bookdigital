@extends('layouts.appadmin')
@section('scripts')
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <link href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet">
    <script>
        $(document).ready(function ($) {
            $('#data_table').DataTable();
        });
    </script>
@endsection
@section('content')

<!--page title-->
    <div class="page-title mb-4 d-flex align-items-center">
        <div class="mr-auto">
            <h4 class="weight500 d-inline-block pr-3 mr-3 border-right">Courses</h4>
                <nav aria-label="breadcrumb" class="d-inline-block ">
                    <ol class="breadcrumb p-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Courses </li>
                    </ol>
                </nav>
        </div>
    </div>
    <!--/page title-->
    <div class="row">
        <div class="col-xl-12">
            <div class="card card-shadow mb-4">
                <div class="card-header border-0">
                    <div class="custom-title-wrap bar-primary">
                        <div class="custom-title p-1">All Courses
                            <a href="{{ route('admin.course.create')}}" role="button" class="btn btn-success rounded-1 btn-sm text-white float-right"><i class="fas fa-plus-circle"></i> Create New</a>
                        </div>
                    </div>
                </div>
                <div class="card-body- p-3">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success ">
                            <p>{{ $message }}</p>
                        </div>
                     @endif
                     @if(count($courses) >= 1)
                    <div class="table-responsive p-3" >
                        <table id="data_table" class="table table-bordered table-striped" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nº</th>
                                    <th>Name</th>
                                    <th>Modality</th>
                                    <th>Course Area</th>
                                    <th>Created at</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($courses as $course)
                                <tr>
                                    <td class="text-center">{{ ++$i }}</td>
                                    <td>{{$course->name}}</td>
                                    <td>{{$course->modality}}</td>
                                    <td>{{$course->area->name}}</td>
                                    <td>{{date('d/m/Y',strtotime($course->created_at))}}</td>
                                    <td>
                                        <a href="{{ route('admin.course.show', $course->id)}}" class="btn btn-primary btn-sm rounded-1 text-white" role="button" aria-pressed="true"><i class="fas fa-eye"></i> Show</a>
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
