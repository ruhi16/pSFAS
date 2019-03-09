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
				@if(Session::has('studentdb'))
					<table class="table table-bordered">
						<tbody>
							<tr>
								<td><strong>Name:</strong>{{ Session::get('studentdb')->name }}</td>
								<td><strong>Father Name:</strong>{{ Session::get('studentdb')->fname }}</td>
								<td><strong>Gender:</strong>{{ Session::get('studentdb')->gender }}</td>
								<td><strong>Adhaar No:</strong>{{ Session::get('studentdb')->adhaar }}</td>
							</tr>
						</tbody>
					</table>
				@endif
			</div>
		</div>

		<div class="panel panel-default">
			<div class="panel-body">
				@if( $errors->any() ) 						
					<p class="alert alert-danger">
					@foreach($errors->all() as $error)
						<strong>{{ $error }}</strong><br>
					@endforeach		
					</p>				
				@endif 
				
				
				{!! Form::open(['method'=>'POST',   'route'=>['admin.studentdb.createpage02.store'], 'class'=>'form-horizontal']) !!}

					<div class="form-group">
						<div class="col-sm-4">
							<label for="fname">Father Name:</label>
							<input type="text" class="form-control" name="fname" id="fname" value="{{ old('fname') }}">
						</div>
						<div class="col-sm-3">
							<label for="foccup">Occupation:</label>
							<input type="text" class="form-control" name="foccup" id="foccup" value="{{ old('foccup')}}">
						</div>
						<div class="col-sm-3">
							<label for="fadhaar">Adhaar:</label>
							<input type="text" class="form-control" name="fadhaar" id="fadhaar" value="{{ old('fadhaar')}}">
						</div>
						<div class="col-sm-2">
							<label for="fmobno">Mobile:</label>
							<input type="text" class="form-control" name="fmobno" id="fmobnno" value="{{ old('fmobno')}}">
						</div>
					</div>


					<div class="form-group">
						<div class="col-sm-4">
							<label for="mname">Mother Name:</label>
							<input type="text" class="form-control" name="mname" id="mname" value="{{ old('mname') }}">
						</div>
						<div class="col-sm-3">
							<label for="moccup">Occupation:</label>
							<input type="text" class="form-control" name="moccup" id="moccup" value="{{ old('moccup')}}">
						</div>
						<div class="col-sm-3">
							<label for="madhaar">Adhaar:</label>
							<input type="text" class="form-control" name="madhaar" id="madhaar" value="{{ old('madhaar')}}">
						</div>
						<div class="col-sm-2">
							<label for="mmobno">Mobile:</label>
							<input type="text" class="form-control" name="mmobno" id="mmobnno" value="{{ old('mmobno')}}">
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-4">
							<label for="gname">Gurdian Name:</label>
							<input type="text" class="form-control" name="gname" id="gname" value="{{ old('gname') }}">
						</div>
						<div class="col-sm-3">
							<label for="goccup">Occupation:</label>
							<input type="text" class="form-control" name="goccup" id="goccup" value="{{ old('goccup')}}">
						</div>
						<div class="col-sm-3">
							<label for="gadhaar">Adhaar:</label>
							<input type="text" class="form-control" name="gadhaar" id="gadhaar" value="{{ old('gadhaar')}}">
						</div>
						<div class="col-sm-2">
							<label for="gmobno">Mobile:</label>
							<input type="text" class="form-control" name="gmobno" id="gmobnno" value="{{ old('gmobno')}}">
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-3">
							<label for="vill">Address Vill:</label>
							<input type="text" class="form-control" name="vill" id="vill" value="{{ old('vill') }}">
						</div>
						<div class="col-sm-3">
							<label for="post">Post Office:</label>
							<input type="text" class="form-control" name="post" id="post" value="{{ old('post')}}">
						</div>
						<div class="col-sm-2">
							<label for="pols">Police Station:</label>
							<input type="text" class="form-control" name="pols" id="pols" value="{{ old('pols')}}">
						</div>
						<div class="col-sm-2">
							<label for="dist">District:</label>
							<input type="text" class="form-control" name="dist" id="dist" value="{{ old('dist')}}">
						</div>
						<div class="col-sm-2">
							<label for="pinn">Pin No:</label>
							<input type="text" class="form-control" name="pinn" id="pinn" value="{{ old('pinn')}}">
						</div>
					</div>

					
					

					<div class="form-group">
						<div class="col-sm-3">
<<<<<<< HEAD
							<label for="knlang">Language Known:</label>
							<input type="text" class="form-control" name="knlang" id="knlang" value="{{ old('knlang') }}">
						</div>
						<div class="col-sm-3">
							<label for="rlgion">Religion:</label>
							<input type="text" class="form-control" name="rlgion" id="rlgion" value="{{ old('rlgion')}}">
						</div>
						<div class="col-sm-4">
							<label for="caste">Caste:</label>
							<input type="text" class="form-control" name="caste" id="caste" value="{{ old('caste')}}">
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-3">
							<label for="phchlng">Physical Challenge:</label>
							<input type="text" class="form-control" name="phchlng" id="phchlng" value="{{ old('phchlng')}}">
						</div>
						<div class="col-sm-9">
							<label for="phchdsc">Description(if Yes):</label>
							<input type="text" class="form-control" name="phchdsc" id="phchdsc" value="{{ old('phchdsc')}}">
=======
							<label for="fmlystatus">Family Status:</label>
							<input type="text" class="form-control" name="fmlystatus" id="fmlystatus" value="{{ old('fmlystatus')}}">
						</div>
						<div class="col-sm-9">
							<label for="fmlystatusdsc">Description:</label>
							<input type="text" class="form-control" name="fmlystatusdsc" id="fmlystatusdsc" value="{{ old('fmlystatusdsc')}}">
>>>>>>> 5de552e5b7b30fc1a6586c1069b67c27b9a4c34b
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-3">
							<label for="fmlystatus">Family Status:</label>
							<input type="text" class="form-control" name="fmlystatus" id="fmlystatus" value="{{ old('fmlystatus')}}">
						</div>
						<div class="col-sm-9">
							<label for="fmlystatusdsc">Family Status:</label>
							<input type="text" class="form-control" name="fmlystatusdsc" id="fmlystatusdsc" value="{{ old('fmlystatusdsc')}}">
						</div>
					</div>









					
					{{--  <div class="form-group">
						<div class="col-sm-12">
							<div class="checkbox">
							<label><input type="checkbox"> Remember me</label>
							</div>
						</div>
					</div>  --}}
					<br><br>
					<div class="form-group">
						<div class="col-sm-12">
							<button type="reset"  class="btn btn-default ">Reset</button>
							<button type="submit" class="btn btn-success pull-right">Save & Goto Next Page</button>
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
