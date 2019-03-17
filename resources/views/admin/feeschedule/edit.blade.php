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
    <h1>Fee-Schedule > Edit Page</h1>
    <div class="panel panel-default">
        <div class="panel panel-head">
            @if( $errors->any() ) 						
				<p class="alert alert-danger">
				@foreach($errors->all() as $error)
					<strong>{{ $error }}</strong><br>
				@endforeach		
				</p>				
			@endif 
            {{--  <a class="btn btn-primary pull-right" href="{{ route('feeschedules.create') }}">New Schedule</a>  --}}
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
                    <label for="clss" class="col-sm-3 control-label">For Class</label>
                    <div class="col-sm-9">                        
                        <select name="clsss" class="form-control">
                            <option value=""></option>                            
                            @foreach($clsss as $clss)
                                <option value="{{ $clss->id }}" {{ $clss->id == $feeschedule->clss_id ? 'selected':''}}>{{ $clss->name }}</option>
                            @endforeach
                        </select>
                    </div>                    
                </div>
                <div class="form-group"> 
                    <label for="months" class="col-sm-3 control-label">Fees Schedule At</label>
                    <div class="col-sm-9">
                        <div class="months">
                            <select name="months" class="form-control">
                            <option value=""></option>
                                <option value="January" {{$feeschedule->formonth_no == "January" ? 'selected':''}}>January</option>                
                                <option value="February" {{$feeschedule->formonth_no == "February" ? 'selected':''}}>February</option>
                                <option value="March" {{$feeschedule->formonth_no == "March" ? 'selected':''}}>March</option>
                                <option value="April" {{$feeschedule->formonth_no == "April" ? 'selected':''}}>April</option>
                                <option value="May" {{$feeschedule->formonth_no == "May" ? 'selected':''}}>May</option>
                                <option value="June" {{$feeschedule->formonth_no == "June" ? 'selected':''}}>June</option>
                                <option value="July" {{$feeschedule->formonth_no == "Jyly" ? 'selected':''}}>July</option>
                                <option value="August" {{$feeschedule->formonth_no == "August" ? 'selected':''}}>August</option>
                                <option value="September" {{$feeschedule->formonth_no == "September" ? 'selected':''}}>September</option>
                                <option value="October" {{$feeschedule->formonth_no == "October" ? 'selected':''}}>October</option>
                                <option value="November" {{$feeschedule->formonth_no == "November" ? 'selected':''}}>November</option>
                                <option value="December" {{$feeschedule->formonth_no == "December" ? 'selected':''}}>December</option>
                            </select>
                        </div>                        
                    </div>                    
                </div>
                
                <div class="form-group">
                    <label for="years" class="col-sm-3 control-label">For Year</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="years" id="years" value="{{ $feeschedule->foryear_no }}">
                    </div>                    
                </div>
                <div class="form-group">
                    <label for="total" class="col-sm-3 control-label">Total Amount</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="total" id="total" value="{{ $feeschedule->total_fee }}">
                    </div>                    
                </div>
                <div class="form-group">
                    <label for="disc" class="col-sm-3 control-label">Discount(if any)</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="disc" id="disc" value="{{ $feeschedule->total_fee_discount }}">
                    </div>                    
                </div>
                <div class="form-group">
                    <label for="feestruc" class="col-sm-3 control-label">Fee Structure</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="feestruc" id="festruc" value="{{ $feeschedule->feestructure }}">
                    </div>                    
                </div>
                <div class="form-group">
                    <label for="remarks" class="col-sm-3 control-label">Remarks(if any)</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="remarks" id="remarks" value="{{ $feeschedule->status }}">
                    </div>                    
                </div>



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
