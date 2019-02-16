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
                                <option value="February" {{$feeschedule->formonth_no == "January" ? 'selected':''}}>February</option>
                                <option value="March" {{$feeschedule->formonth_no == "January" ? 'selected':''}}>March</option>
                                <option value="April" {{$feeschedule->formonth_no == "January" ? 'selected':''}}>April</option>
                                <option value="May" {{$feeschedule->formonth_no == "January" ? 'selected':''}}>May</option>
                                <option value="June" {{$feeschedule->formonth_no == "January" ? 'selected':''}}>June</option>
                                <option value="July" {{$feeschedule->formonth_no == "January" ? 'selected':''}}>July</option>
                                <option value="August" {{$feeschedule->formonth_no == "January" ? 'selected':''}}>August</option>
                                <option value="September" {{$feeschedule->formonth_no == "January" ? 'selected':''}}>September</option>
                                <option value="October" {{$feeschedule->formonth_no == "January" ? 'selected':''}}>October</option>
                                <option value="November" {{$feeschedule->formonth_no == "January" ? 'selected':''}}>November</option>
                                <option value="December" {{$feeschedule->formonth_no == "January" ? 'selected':''}}>December</option>
                            </select>
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
