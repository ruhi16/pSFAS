@extends('admin.layouts.baselayout')
@section('title','School Index')

@section('header')
	@include('admin.layouts.navbar')
@endsection

@section('body-content-sidebar')
    @include('admin.layouts.sidebar')

@endsection

@section('body-content-content')
    <h1>School/Create Page</h1>
    

		<div class="panel panel-default">
			<div class="panel-body">
            
			{!! Form::open(['method'=>'PUT',   'route'=>['schools.update', $school ], 'class'=>'form-horizontal']) !!}

				<div class="form-group">
					<label for="name" class="col-sm-2 control-label">Name</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="name" id="name" placeholder="School Name" value="{{ $school->name }}">
					</div>
				</div>
				<div class="form-group">
					<label for="dise" class="col-sm-2 control-label">DISE CODE</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="dise" id="dise" placeholder="School DISE Code" value="{{ $school->dise }}">
					</div>
				</div>
				<div class="form-group">
					<label for="vill" class="col-sm-2 control-label">Village</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" name="vill" id="vill" placeholder="Village" value="{{ $school->vill }}">
					</div>
					<label for="post" class="col-sm-2 control-label">Post Office</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" name="post" id="post" placeholder="Post Office" value="{{ $school->post }}">
					</div>
				</div>
				<div class="form-group">
					<label for="pstn" class="col-sm-2 control-label">Police Station</label>
					<div class="col-sm-3">
						<input type="text" class="form-control" name="pstn" id="pstn" placeholder="Police Station" value="{{ $school->pstn }}">
					</div>
					<label for="dist" class="col-sm-1 control-label">District</label>
					<div class="col-sm-3">
						<input type="text" class="form-control" name="dist" id="dist" placeholder="District" value="{{ $school->dist }}">
					</div>
					<label for="dist" class="col-sm-1 control-label">Pin</label>
					<div class="col-sm-2">
						<input type="text" class="form-control" name="pin" id="dist" placeholder="Pin Number" value="{{ $school->pin }}">
					</div>
				</div>
				
				<br>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-1">
						<button type="reset" class="btn btn-default">Cancel</button>
					</div>
					<div class="col-sm-8">
						<button type="submit" class="btn btn-primary">Save changes</button>
					</div>
				</div>


				{!! Form::close() !!}
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
