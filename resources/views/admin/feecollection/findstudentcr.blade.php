@extends('admin.layouts.baselayout')
@section('title','Session Index')


@section('header')
	@include('admin.layouts.navbar')
@endsection

@section('body-content-sidebar')
    @include('admin.layouts.sidebar')

@endsection

@section('body-content-content')
<link rel="stylesheet" href="{{ url('bs337/fastselect/fastselect.min.css') }}">
    <h1>Fee-Collection > Find_Student_CR Page</h1>
    <div class="panel panel-default">
        <div class="panel panel-head">
            <br>
        </div>
        <div class="panel panel-body">
            
            {!! Form::open(['method'=>'GET',   'route'=>['admin.feecollection.studentcr'], 'class'=>'form-horizontal']) !!}
                 {{-- <input name="_method" type="hidden" value="GET"> 					 --}}
                <div class="form-group">
                    <label for="studentcr_id" class="col-sm-2 control-label">Student CR_Id</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="studentcr_id">
                    </div>   
                    <div class="col-sm-2">
                        <button type="submit" class=" btn btn-primary">Search</button>                               
                    </div>
                </div>	
            {!! Form::close() !!} 
            
            
            @if( Session::has('error'))
                <div class="alert alert-danger"><strong> {{ Session::get('error') }}</strong></div>
                {{ Session::forget('error') }}
            @endif
        </div>
        <div class="panel panel-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>CR ID</th>
                        <th>Name</th>
                        <th>Class</th>
                        <th>Section</th>
                        <th>Roll No</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>                    
                    @foreach($studentcrs as $studentcr)
                    <tr>
                        <td>{{ $studentcr->id }}</td>
                        <td>{{ $studentcr->studentdb->name }}</td>
                        <td>{{ $studentcr->clss->name }}</td>
                        <td>{{ $studentcr->section->name }}</td>
                        <td>{{ $studentcr->roll_no }}</td>
                        <td>
                            {{--  {!! Form::open(['method'=>'GET',   'route'=>['admin.feecollection.studentcr'], 'class'=>'form-horizontal']) !!}
                                <input type="hidden" class="form-control" name="studentcr_id" value="{{ $studentcr->id }}">
                                <button type="submit" class=" btn btn-success btn-sm">Check Out</button>                                   	
                            {!! Form::close() !!}   --}}
                            <a href="{{ route('admin.feecollection.studentcr', ['studentcr_id' => $studentcr->id]) }}" class="btn btn-success">Check Out</a>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>

        


<script type="text/javascript">
	$(document).ready(function(e){

	});  
</script>

@endsection

@section('footer')
	@include('admin.layouts.footer')
@endsection
