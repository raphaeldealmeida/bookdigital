@extends('layouts.appadmin')

@section('content')
<!--page title-->
    <div class="page-title mb-4 d-flex align-items-center">
        <div class="mr-auto">
            <h4 class="weight500 d-inline-block pr-3 mr-3 border-right">Area</h4>
                <nav aria-label="breadcrumb" class="d-inline-block ">
                    <ol class="breadcrumb p-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.area.index')}}">Area</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Create New Area</li>
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
                    <div class="custom-title">Create New Area</div>
                   </div>
                </div>
                    <div class="card-body">
                        <p class="text-muted">
                            Enter the name of the new area.
                        </p>
                        <form action="{{route('admin.area.store')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="NameArea">Name</label>
                                    <input type="text" name="name" class="form-control"  aria-describedby="nameHelp" placeholder="Enter name">
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
