@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card card-shadow mb-4">
            <div class="card-header border-0">
                <div class="custom-title-wrap bar-primary">
                    New Simulation
                </div>
            </div>

            <div class="card-body- p-3">
                <table>

                </table>
                <h3>New Laboratories</h3>
                <div class="table-responsive p-3" >
                    <table id="data_table" class="table table-bordered table-striped" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Area</th>
                            <th>Size</th>
                            <th>Semester</th>
                            <th>Product Sum</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($newLaboratories as $laboratory)
                            <tr>
                                <td>{{$laboratory->name}}</td>
                                <td>@float($laboratory->area) M²</td>
                                <td>{{$laboratory->size}}</td>
                                <td>{{$laboratory->semester}}</td>
                                <td>R$ @float($laboratory->ProductsSumPrice)</td>
                                <td>
                                    <a href="{{ url('laboratories', $laboratory->id)}}" class="btn btn-primary btn-sm rounded-1 text-white" role="button" aria-pressed="true"><i class="fas fa-eye"></i> Show</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <h3>Old Laboratories</h3>
                <div class="table-responsive p-3" >
                    <table id="data_table" class="table table-bordered table-striped" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Area</th>
                            <th>Size</th>
                            <th>Semester</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($oldLaboratories as $laboratory)
                            <tr>
                                <td>{{$laboratory->name}}</td>
                                <td>@float($laboratory->area) M²</td>
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
            </div>
        </div>
    </div>
</div>
@endsection
