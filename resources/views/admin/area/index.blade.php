@extends('layouts.appadmin')

@section('content')

<!--page title-->
    <div class="page-title mb-4 d-flex align-items-center">
        <div class="mr-auto">
            <h4 class="weight500 d-inline-block pr-3 mr-3 border-right">Areas</h4>
                <nav aria-label="breadcrumb" class="d-inline-block ">
                    <ol class="breadcrumb p-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Areas</li>
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
                        <div class="custom-title p-1">Area
                            <a href="{{ route('admin.area.create')}}" role="button" class="btn btn-success rounded-1 btn-sm text-white float-right"><i class="fas fa-plus-circle"></i> Create New</a>
                        </div>
                    </div>
                </div>
                <div class="card-body- p-3">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success ">
                            <p>{{ $message }}</p>
                        </div>
                     @endif
                     @if(count($areas) >= 1)
                    <div class="table-responsive p-3" >
                        <table id="data_table" class="table table-bordered table-striped" cellspacing="0">
                            <thead>
                                <tr>
                                    <th class="text-center">Nº</th>
                                    <th>Name</th>
                                    <th>Created at</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($areas as $area)
                                <tr>
                                    <td class="text-center">{{ ++$i }}</td>
                                    <td>{{$area->name}}</td>
                                    <td>{{date('d/m/Y',strtotime($area->created_at))}}</td>
                                    <td>
                                        <a href="{{ route('admin.area.show', $area->id)}}" class="btn btn-primary btn-sm rounded-1 text-white" role="button" aria-pressed="true"><i class="fas fa-eye"></i> View</a>
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
                    {{$areas->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection
