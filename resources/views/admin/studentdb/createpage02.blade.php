@extends('admin.layouts.baselayout')
@section('title','School Index')

@section('header')
	@include('admin.layouts.navbar')
@endsection

@section('body-content-sidebar')
    @include('admin.layouts.sidebar')
@endsection

@section('body-content-content')
	<h1>Student DB > Create Page 02 : Personal Details</h1>
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
				
				@if(Session::has('studentdb'))
					{{ Session::get('studentdb')->name }}
					{{ Session::get('studentdb')->fname }}
					{{ Session::get('studentdb')->gender }}
					{{ Session::get('studentdb')->adhaar }}
				@endif
					{!! Form::open(['method'=>'POST',   'route'=>['admin.studentdb.createpage02.store'], 'class'=>'form-horizontal']) !!}

						<div class="form-group">
							<div class="col-sm-6">
								<label for="vill">Village</label>
								<input type="text" class="form-control" name="vill" id="vill" value="{{ old('vill') }}">
							</div>
							<div class="col-sm-6">
								<label for="post">Post Office:</label>
								<input type="text" class="form-control" name="post" id="post" value="{{ old('post') }}">
							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-6">
								<label for="pols">Police Station</label>
								<input type="text" class="form-control" name="pols" id="pols" value="{{ old('pols') }}">
							</div>
							<div class="col-sm-6">
								<label for="dist">District:</label>
								<input type="text" class="form-control" name="dist" id="dist" value="{{ old('dist') }}">
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
