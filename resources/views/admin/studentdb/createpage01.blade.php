@extends('admin.layouts.baselayout')
@section('title','School Index')

@section('header')
	@include('admin.layouts.navbar')
@endsection

@section('body-content-sidebar')
    @include('admin.layouts.sidebar')
@endsection

@section('body-content-content')
	<h2>Student DB > Create Page 01 : Personal Details</h2>
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
						<p class="alert alert-danger">
						@foreach($errors->all() as $error)
							<strong>{{ $error }}</strong><br>
						@endforeach		
						</p>				
					@endif 
				

					
					{!! Form::open(['method'=>'POST',   'route'=>['admin.studentdb.createpage01.store'], 'class'=>'form-horizontal']) !!}

						<div class="form-group">
							<div class="col-sm-3">
								<label for="admbkno">Admission Book No:</label>
								<input type="text" class="form-control" name="admbkno" id="admbkno" value="1">
							</div>
							<div class="col-sm-3">
								<label for="admslno">Admission Sl No:</label>
								<input type="text" class="form-control" name="admslno" id="admslno" value="{{ old('admslno')}}">
							</div>
							<div class="col-sm-6">
								<label for="admdate">Admission Date:</label>
								<input type="date" class="form-control" name="admdate" id="admdate" value="{{ old('admdate')}}">
							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-8">
								<label for="name">Student Name:</label>
								<input type="text" class="form-control" name="name" id="name" value="{{ old('name')}}">
							</div>
							<div class="col-sm-4">
								<label for="dobirth">Date Of Birth(As Birth Certificate):</label>
								<input type="date" class="form-control" name="dobirth" id="dobirth" value="{{ old('dobirth')}}">
							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-3">
								<label for="gender">Gender:</label>
								<select class="form-control" name="gender" id="gender">
									<option></option>
									<option value="Male"  {{ old('gender') == "Male" ? 'selected' : '' }}>Male</option>
									<option value="Female"{{ old('gender') == "Female" ? 'selected' : '' }}>Female</option>
									<option value="3rdGender" {{ old('gender') == "3rdGender" ? 'selected' : '' }}>3rd Gender</option>
								</select>
								{{-- {!! Form::select('gender', ['' => '--Gender--', 'male' => 'Male', 'female' => 'Female']) !!} --}}
							</div>

							<div class="col-sm-3">
								<label for="adm_clss_id">Admission Class:</label>
								<select class="form-control" name="adm_clss_id" id="adm_clss_id">									
									<option></option>
									@foreach($clsss as $clss)
										<option value={{$clss->id}} {{ old('adm_clss_id') == $clss->id ? 'selected' : '' }}>{{ $clss->name }}</option>
									@endforeach
								</select>
							</div>

							<div class="col-sm-4">
								<label for="adhaar">Aadhaar No:</label>
								<input type="text" class="form-control" name="adhaar" id="adhaar" value="{{ old('adhaar')}}">
							</div>	

							<div class="col-sm-2">
								<label for="nation">Nationality:</label>
								<select class="form-control" name="nation" id="nation">									
									<option value="Indian">Indian</option>
									<option value="Other">Other</option>
								</select>
							</div>							
						</div>

						<div class="form-group">
							<div class="col-sm-3">
								<label for="phchlng">Physically Challenged:</label>
								<input type="text" class="form-control" name="phchlng" id="phchlng" value="{{ old('phchlng')}}">
							</div>
							<div class="col-sm-9">
								<label for="phchlngdsc">Description:</label>
								<input type="text" class="form-control" name="phchlngdsc" id="phchlngdsc" value="{{ old('phchlngdsc')}}">
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
