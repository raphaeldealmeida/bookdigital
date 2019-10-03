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
        <h4 class="weight500 d-inline-block pr-3 mr-3 border-right">Laboratories</h4>
            <nav aria-label="breadcrumb" class="d-inline-block ">
                <ol class="breadcrumb p-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.index')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Laboratories</li>
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
                    <div class="custom-title p-1">Products
                        <a href="{{ route('admin.laboratory.create')}}" role="button" class="btn btn-success rounded-1 btn-sm text-white float-right"><i class="fas fa-plus-circle"></i> Create New</a>
                    </div>
                </div>
            </div>
            <div class="card-body- p-3">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success ">
                        <p>{{ $message }}</p>
                    </div>
                 @endif
                @if(count($laboratory) >= 1)
                <div class="table-responsive p-3" >
                    <table id="data_table" class="table table-bordered table-striped" cellspacing="0">
                        <thead>
                            <tr>
                                <th class="text-center">Nº</th>
                                <th>Name</th>
                                <th>Area</th>
                                <th>Size</th>
                                <th>Semester</th>
                                <th>Created at</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($laboratory as $laboratory)
                            <tr>
                                <td class="text-center">{{ ++$i }}</td>
                                <td>{{$laboratory->name}}</td>
                                <td>@float($laboratory->area) M²</td>
                                <td>{{$laboratory->size}}</td>
                                <td>{{$laboratory->semester}}</td>
                                <td>{{date('d/m/Y',strtotime($laboratory->created_at))}}</td>
                                <td>
                                    <a href="{{ route('admin.laboratory.show', $laboratory->id)}}" class="btn btn-primary btn-sm rounded-1 text-white" role="button" aria-pressed="true"><i class="fas fa-eye"></i> Show</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @else
                <dl class="row p-3">
                    <dt class="col-sm-12 alert alert-info" role="alert">There are no registered laboratory!</dt>
                </dl>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
