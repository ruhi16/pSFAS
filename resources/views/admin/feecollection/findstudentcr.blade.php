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
            
        </div>
        <div class="panel panel-body">

            {{--  <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>  --}}
            {!! Form::open(['method'=>'POST',   'route'=>['admin.feecollection.studentcr'], 'class'=>'form-horizontal']) !!}
					{{--  <input name="_method" type="hidden" value="GET">  --}}
					
					<div class="form-group">
						<label for="studentcr_id" class="col-sm-2 control-label">Student Id</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="studentcr_id">
						</div>   
						<div class="col-sm-2">
							<button type="submit" class=" btn btn-primary">Save changes</button>                               
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
