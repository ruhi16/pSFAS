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
    <h1>Fee-Collection > Create Page</h1>
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
                        <input type="text" class="form-control" name="name" id="name" placeholder="Section Name">
                    </div> 
                    <label for="name" class="col-sm-2 control-label">Month</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Section Name">
                    </div> 
                    <label for="name" class="col-sm-1 control-label">Year</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Section Name">
                    </div>                    
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Student</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Section Name">
                    </div> 
                    <label for="name" class="col-sm-2 control-label">Class</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Section Name">
                    </div> 
                    <label for="name" class="col-sm-1 control-label">SecRoll</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Section Name">
                    </div>                                        
                </div>	
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Amount</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Section Name">
                    </div> 
                    <label for="name" class="col-sm-2 control-label">Discount</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Section Name">
                    </div> 
                    <label for="name" class="col-sm-1 control-label">Payabale</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Section Name">
                    </div>                                        
                </div>

                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">In Word</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Section Name">
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
