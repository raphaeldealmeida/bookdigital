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
                        <li class="breadcrumb-item active" aria-current="page">{{$laboratory->name}}</li>
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
                        <div class="custom-title p-2">{{$laboratory->name}}
                            <form class ="float-right" action="{{ route('admin.laboratory.destroy', $laboratory->id)}}" method="post">
                                <a href="{{ route('admin.laboratory.edit', $laboratory->id)}}" class="btn btn-purple rounded-1 text-white" role="button" aria-pressed="true"><i class="fas fa-edit"></i> Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger rounded-1 text-white"><i class="fas fa-trash"></i> Delete</button>
                            </form>
                     </div>
                   </div>
                </div>
                    <div class="card-body">
                        <dl class="row">
                            <dt class="col-sm-3">Name</dt>
                            <dd class="col-sm-9">{{$laboratory->name}}</dd>
                            <dt class="col-sm-3">Area</dt>
                            <dd class="col-sm-9">{{$laboratory->area}}</dd>
                            <dt class="col-sm-3">Size</dt>
                            <dd class="col-sm-9">{{$laboratory->size}}</dd>
                            <dt class="col-sm-3">Semester</dt>
                            <dd class="col-sm-9"> {{$laboratory->semester}}</dd>
                            <dt class="col-sm-3">Create at</dt>
                            <dd class="col-sm-9">{{date('d/m/Y',strtotime($laboratory->created_at))}}</dd>
                        </dl>

                        <h5 class="text-secondary">Courses e Areas</h5>

                        @foreach ($laboratory->courses as $course)
                            <li><b>Course:</b> {{$course->name}} <b>and Area:</b> ({{$course->area->name}})</li>
                        @endforeach

                        <div class="form-group mt-3">
                            <div for="LaboratoryProducts"><b> Laboratory Products</b>
                                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#addProductModal">
                                        Add Product
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="addProductModal" tabindex="-1" role="dialog" aria-labelledby="addProductModal" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Add Products for Labororatory</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="" method="POST">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="CodeProduct">Description</label>
                                                        <input type="search" name="description" class="typeahead form-control"  aria-describedby="nameHelp" placeholder="Enter description" required >
                                                </div>
                                                <div class="form-group">
                                                    <label for="CodeProduct">Code</label>
                                                        <input type="text" name="code" class="form-control"  aria-describedby="nameHelp" placeholder="Enter code" required disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label for="CodeProduct">Account Code</label>
                                                        <input type="text" name="accountcode" class="form-control"  aria-describedby="nameHelp" placeholder="Enter account code" required disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label for="CodeProduct">Unit Price</label>
                                                        <input type="text" name="unitprice" class="form-control"  aria-describedby="nameHelp" placeholder="Enter unit price" required disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label for="CodeProduct">Quantity</label>
                                                        <input type="number" name="unitprice" class="form-control"  aria-describedby="nameHelp" placeholder="Enter quantaty" required >
                                                </div>
                                                <div class="form-group">
                                                    <label for="CodeProduct">Ammount</label>
                                                        <input type="number" name="unitprice" class="form-control"  aria-describedby="nameHelp" placeholder="Enter unit price" required disabled>
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save </button>
                                            </form>
                                            <script type="text/javascript">
                                                var path = "{{ url('laboratory.autocompleteproduct')}}";
                                                $('input.typeahead').typeahead({
                                                    source:  function (query, process) {
                                                    return $.get(path, { query: query }, function (data) {
                                                            return process(data);
                                                        });
                                                    }
                                                });
                                            </script>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <div class="table-responsive p-3" >
                                    <table id="data_table" class="table table-bordered table-striped" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Code</th>
                                                <th>Description</th>
                                                <th>Account Code</th>
                                                <th>Unit Price</th>
                                                <th>Quantity</th>
                                                <th>Ammount</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1111</td>
                                                <td>teste afdasfasfda fas fasdfdasfa</td>
                                                <td>CAPEX</td>
                                                <td>R$ 21212.121</td>
                                                <td>10</td>
                                                <td>R$ 12121212</td>
                                                <td>
                                                    <a href="" class="btn btn-primary btn-sm rounded-1 text-white" role="button" aria-pressed="true"><i class="fas fa-eye"></i> View</a>
                                                    <a href="" class="btn btn-secondary btn-sm rounded-1 text-white" role="button" aria-pressed="true"><i class="fas fa-edit"></i> Edit</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                </div>
            </div>
        </div>
    </div>

@endsection
