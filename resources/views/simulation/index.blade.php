@extends('layouts.app')
@section('scripts')
    <script>
        $(document).ready(function($){
            //$('select#course_id').on("change", function(e){
                if ("{{ $course_id }}" == ""){
                    $('button#simulate').attr('disabled', true);
                }else{
                    $('button#simulate').attr('disabled', false);
                }
            //});
        });
    </script>
@endsection
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
                <form action="{{route('simulation')}}" method="GET" id="simulation">
                    <div class="form-group">
                        <label for="">Select Course</label>
                            <select class="custom-select" name="course_id" id="course">
                                <option value="" selected >Select a course</option>
                                @foreach ($courses as $c)
                                    <option value="{{$c->id}}" {{ ( $c->id == $course_id) ? 'selected' : '' }} >{{$c->name}}</option>
                                 @endforeach
                            </select>
                    </div>
                </form>
                <form action="{{route('simulation.report')}}" method="POST" id="simulation-report">
                    @csrf
                    <input type="hidden" name="course_id" value="{{$courses->first()->id}}">
                <label for="">Which Labs are already deployed in your unit?</label>
                <div class="form-group">
                    @forelse ($laboratories as $laboratory)
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="laboratories[]" value="{{$laboratory->id}}" > {{$laboratory->name}}
                            </label>
                        </div>
                    @empty
                        <p>Ops, this course does not have any laboratories registered :(</p>
                    @endforelse
                </div>
                <button type="submit" disabled id="simulate">Simulete</button>
                </form>
        </div>
    </div>
</div>
@endsection
