@extends('admin.layouts.baselayout')
@section('title','School Index')

@section('header')
	@include('admin.layouts.navbar')
@endsection

@section('body-content-sidebar')
    @include('admin.layouts.sidebar')
@endsection

@section('body-content-content')
	<h1>Student DB > Create Page 01 : Personal Details</h1>
		<div class="panel panel-default">
			<div class="panel-body">
				<a href="{{ route('admin.studentdb.createpage01') }}" class="btn btn-primary" >Page 01</a>
				<a href="{{ route('admin.studentdb.createpage02') }}" class="btn btn-success" >Page 02</a>
				<a href="{{ route('admin.studentdb.createpage03') }}" class="btn btn-warning" >Page 03</a>
				<a href="{{ route('admin.studentdb.createpage04') }}" class="btn btn-danger"  >Page 04</a>
				<a href="{{ route('admin.studentdb.createpage05') }}" class="btn btn-info"    >Page 05</a>
				<a href="{{ route('admin.studentdb.createpage06') }}" class="btn btn-primary" >Page 06</a>
			</div>
		</div>


		<div class="panel panel-default">
			<div class="panel-body">
					@if( $errors->any() ) 
						<ul class="validation-errors">
						@foreach($errors->all() as $error)
							<li class="validation-error-item">{{ $error }}</li>
						@endforeach
						</ul>
					@endif 
				

					
					{!! Form::open(['method'=>'POST',   'route'=>['admin.studentdb.createpage01.store'], 'class'=>'form-horizontal']) !!}

						<div class="form-group">
							<div class="col-sm-6">
								<label for="name">Name:</label>
								<input type="text" class="form-control" name="name" id="name" value="{{ old('name')}}">
							</div>
							<div class="col-sm-6">
								<label for="fname">Father Name:</label>
								<input type="text" class="form-control" name="fname" id="fname" value="{{ old('fname')}}">
							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-6">
								<label for="gender">Gender:</label>
								<input type="text" class="form-control" name="gender" id="gender" value="{{ old('gender')}}">
							</div>
							<div class="col-sm-6">
								<label for="adhaar">Adhaar:</label>
								<input type="text" class="form-control" name="adhaar" id="adhaar" value="{{ old('adhaar')}}">
							</div>
						</div>
						{{--  <div class="form-group">
							<div class="col-sm-12">
								<div class="checkbox">
								<label><input type="checkbox"> Remember me</label>
								</div>
							</div>
						</div>  --}}

						<div class="form-group">
							<div class="col-sm-12">
								<button type="reset"  class="btn btn-default">Reset</button>
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
						</div>

					{!! Form::close() !!}





					
				</div>
			</div>

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
