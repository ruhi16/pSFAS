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
    <h1>Fee-Collection > Student CR Fee Description Page</h1>
    <div class="panel panel-default">
        <div class="panel-body">

            {!! Form::open(['method'=>'POST',   'route'=>['feecollections.store'], 'class'=>'form-horizontal']) !!}

                <div class="form-group">
                    <label for="name" class="col-sm-5 control-label"></label>
                    
                    <label for="name" class="col-sm-2 control-label">User:</label>
                    <label for="name" class="col-sm-2 control-label">user_name</label>
                    
                    <label for="name" class="col-sm-1 control-label">Date:</label>
                    <label for="name" class="col-sm-2 control-label">date</label>                    
                </div>
                
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Schedule</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="name" id="name" value="{{ $feeschedule->name }}" readonly>
                    </div> 
                    <label for="name" class="col-sm-2 control-label">Month</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" name="name" id="name" value="{{ $feeschedule->formonth_no }}" readonly>
                    </div> 
                    <label for="name" class="col-sm-1 control-label">Year</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" name="name" id="name" value="{{ $feeschedule->foryear_no }}" readonly>
                    </div>                    
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Student</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="name" id="name" value="{{ $studentcr->studentdb->name }}" readonly>
                    </div> 
                    <label for="name" class="col-sm-2 control-label">Class</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" name="name" id="name" value="{{ $studentcr->clss->name }}" readonly>
                    </div> 
                    <label for="name" class="col-sm-1 control-label">SecRoll</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" name="name" id="name" value="{{ $studentcr->section->name }}-{{$studentcr->roll_no}}" readonly>
                    </div>                                        
                </div>	
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Amount</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="name" id="name" value="{{ $feeschedule->total_fee }}" readonly>
                    </div> 
                    <label for="name" class="col-sm-2 control-label">Discount</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" name="name" id="name" value="{{ $feeschedule->total_fee_discount }}" readonly>
                    </div> 
                    <label for="name" class="col-sm-1 control-label">Payabale</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" name="name" id="name" value="{{ $feeschedule->total_fee }}" readonly>
                    </div>                                        
                </div>

                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">In Word</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" id="name" >
                    </div> 
                </div>

                <div class="form-group">
                    <div class="col-offset-2 col-sm-10">
                        <a href="{{ route('admin.feecollection.studentcr', ['studentcr_id' => $studentcr->id]) }}" class="col-sm-offset-2 btn btn-default ">Cancel</a>
                        <a href="{{ route('admin.feecollection.collection',['studentcr'=>$studentcr, 'feeschedule'=>$feeschedule]) }}" class="btn btn-success ">Pay Fees</a>
                    </div>
                </div>
                


                {!! Form::close() !!}
            </div>
        </div>

    <link rel="stylesheet" href="{{ url('bs337/select2/select2.min.css') }}">
    <link rel="stylesheet" href="{{ url('bs337/select2/select2-bootstrap.css') }}">
	<link rel="stylesheet" href="{{ url('bs337/select2/gh-pages.css') }}">

    <script src="{{ url('bs337/select2/select2jquery.min.js') }}"></script>
    <script src="{{ url('bs337/select2/select2.full.js') }}"></script>

    <script>
        $( ".select2-multiple" ).select2( {
            theme: "bootstrap",
            placeholder: "Select a State",
            maximumSelectionSize: 6,
            containerCssClass: ':all:'
        } );

        
    </script>


<script type="text/javascript">
	$(document).ready(function(e){
        $('.multipleSelect').fastselect();
	});  
</script>

@endsection

@section('footer')
	@include('admin.layouts.footer')
@endsection
