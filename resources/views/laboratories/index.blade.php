@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card card-shadow mb-4">
            <div class="card-header border-0">
                <div class="custom-title-wrap bar-primary">
                    All Laboratories
                </div>
            </div>
            <div class="card-body- p-3">
                 @if(count($laboratories) >= 1)
                <div class="table-responsive p-3" >
                    <table id="data_table" class="table table-bordered table-striped" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Account Code</th>
                                <th>Code</th>
                                <th>Description</th>
                                <th>Unit Price</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($laboratories as $laboratory)
                            <tr>
                                <td>{{$laboratory->name}}</td>
                                <td>{{$laboratory->area}} M²</td>
                                <td>{{$laboratory->size}}</td>
                                <td>{{$laboratory->semester}}</td>
                                <td>
                                    <a href="{{ url('laboratories', $laboratory->id)}}" class="btn btn-primary btn-sm rounded-1 text-white" role="button" aria-pressed="true"><i class="fas fa-eye"></i> Show</a>
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
                {{$laboratories->links()}}
            </div>
        </div>
    </div>
</div>
@endsection
