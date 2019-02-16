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
    <h1>Fee-Schedule > Index Page</h1>
    <div class="panel panel-default">
        <div class="panel panel-head">
            <a class="btn btn-primary pull-right" href="{{ route('feeschedules.create') }}">New Schedule</a>
        </div>
        <div class="panel-body">
            {!! Form::open(['method'=>'PUT',   'route'=>['feeschedules.update', $feeschedule], 'class'=>'form-horizontal']) !!}
                {{-- <input name="_method" type="hidden" value="PUT"> 					 --}}
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Fees Schedule Name</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" name="name" id="name" value="{{ $feeschedule->name }}">
                    </div>                    
                </div>	
                <div class="form-group">
                    <label for="clsss" class="col-sm-3 control-label">For Class(es)</label>
                    <div class="col-sm-9">                        
                        <select name="clsss" class="form-control">
                            <option value=""></option>
                            <option value="{{ $feeschedule->name }}">{{ $feeschedule->name }}</option>
                            {{-- @foreach($clsss as $clss)
                                <option value="{{ $clss->id }}">{{ $clss->name }}</option>
                            @endforeach --}}
                        </select>
                    </div>                    
                </div>
                <div class="form-group"> 
                    <label for="months" class="col-sm-3 control-label">Fees Schedule At</label>
                    <div class="col-sm-9">
                        <div class="select2-wrapper">
                            {{-- <select name="months[]" class="form-control select2-multiple" multiple="multiple">
                                <option value=""></option>
                                <option value="January">January</option>                
                                <option value="February">February</option>
                                <option value="March">March</option>
                                <option value="April">April</option>
                                <option value="May">May</option>
                                <option value="June">June</option>
                                <option value="July">July</option>
                                <option value="August">August</option>
                                <option value="September">September</option>
                                <option value="October">October</option>
                                <option value="November">November</option>
                                <option value="December">December</option>
                            </select> --}}
                        </div>
                        {{-- <input type="text" class="form-control" name="name" id="name" placeholder="Section Name"> --}}
                    </div>                    
                </div>
                
                {{-- <div class="form-group">
                    <label for="fees" class="col-sm-3 control-label">Fees Structure</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="fees" id="fees" placeholder="Detail Fees Structure">
                    </div>                    
                </div>
                <div class="form-group">
                    <label for="total" class="col-sm-3 control-label">Total Amount</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="total" id="total" placeholder="Total Calculated Amount">
                    </div>                    
                </div>
                <div class="form-group">
                    <label for="disc" class="col-sm-3 control-label">Discount(if any)</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="disc" id="disc" placeholder="any discount in percentage %" value="0">
                    </div>                    
                </div>
                <div class="form-group">
                    <label for="status" class="col-sm-3 control-label">Remarks(if any)</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="status" id="status" placeholder="any remarks want to submit">
                    </div>                    
                </div> --}}



                <button type="reset" class="col-sm-offset-2 btn btn-default">Reset</button>
                <button type="submit" class=" btn btn-primary">Save changes</button>              


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
