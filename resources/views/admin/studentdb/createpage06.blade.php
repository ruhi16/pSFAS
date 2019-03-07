@extends('admin.layouts.baselayout')
@section('title','School Index')

@section('header')
	@include('admin.layouts.navbar')
@endsection

@section('body-content-sidebar')
    @include('admin.layouts.sidebar')
@endsection

@section('body-content-content')
	<h2>Student DB > Create Page 06 : Customize Information Update</h2>
	<div class="panel panel-default">
		<div class="panel-body">
			@for($i=1; $i<=6; $i++)
				@php $str = 'admin.studentdb.createpage0'.$i; @endphp
				@if( $i <= Session::get('studentdb')->pagestatus )
					<a href="{{ route($str) }}" class="btn btn-primary" >Page 0{{$i}}</a>
				@else 
					{{--  <a href="{{ route($str) }}" class="btn btn-primary" disabled>Page 0{{$i}}</a>  --}}
				@endif

				
			@endfor
			{{--  <a href="{{ route('admin.studentdb.createpage01') }}" class="btn btn-primary" >Page 01</a>
			<a href="{{ route('admin.studentdb.createpage02') }}" class="btn btn-success" >Page 02</a>
			<a href="{{ route('admin.studentdb.createpage03') }}" class="btn btn-warning" >Page 03</a>
			<a href="{{ route('admin.studentdb.createpage04') }}" class="btn btn-danger"  >Page 04</a>
			<a href="{{ route('admin.studentdb.createpage05') }}" class="btn btn-info"    >Page 05</a>
			<a href="{{ route('admin.studentdb.createpage06') }}" class="btn btn-primary" >Page 06</a>  --}}
		</div>
	</div>
	@if( $errors->any() ) 
		<ul class="validation-errors">
		@foreach($errors->all() as $error)
			<li class="validation-error-item">{{ $error }}</li>
		@endforeach
		</ul>
	@endif 
			
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

	<div class="panel panel-default">
		<div class="panel-body">
			{!! Form::open(['method'=>'POST',   'route'=>['admin.studentdb.createpage06.store'], 'class'=>'form-horizontal']) !!}

				<p class="alert alert-success text-center"><strong>Please Check All The Information Submitted, if required Modify and Save, Then Finalize!!!</strong></p>
				
				<center>
					<h2>{{ $school->name }}</h2>
					<h5>{{ $school->vill }} * {{ $school->pstn }} * {{ $school->dist }}</h5>
					<h4>Students Detail Format</h4>
				</center>
				<div class="row">
					<div class="col-sm-9">
						<h3>For Office Uses/Details:</h3>
						<strong>Student Id: </strong>{{ Session::get('studentdb')->adm_clss_id}} - {{ Session::get('studentdb')->admslno}} / {{Session::get('studentdb')->admdate}}
						
						<h3>Personal Details:</h3>
						<table class="table table-bordered">					
							<tbody>
								<tr><td width="150" align="right"><strong>Name:</strong></td>       <td colspan="4" align="left">{{ Session::get('studentdb')->name }}</td></tr>
								<tr><td width="150" align="right"><strong>Father Name:</strong></td><td colspan="4">{{ Session::get('studentdb')->fname }}</td></tr>
								<tr><td width="150" align="right"><strong>Date of Birth:</strong></td><td>{{ Session::get('studentdb')->dobirth }}</td>
									<td width="150" align="right"><strong>Gender:</strong></td><td>{{ Session::get('studentdb')->gender }}</td></tr>
							</tbody>
						</table>
					</div>
					<div class="col-sm-3">
						<img src="{{ asset('images/'.Session::get('studentdb')->imagename) }}" width="200">
					</div>
				</div>

				<div class="row">
					<div class="col-sm-12">						
						<table class="table table-bordered">					
							<tbody>
								<tr>
									<td width="150" align="right"><strong>Language Known:</strong></td> 		<td>{{ Session::get('studentdb')->vill }}</td>
									<td width="150" align="right"><strong>Religion:</strong></td> 	<td>{{ Session::get('studentdb')->post }}</td>
									<td width="150" align="right"><strong>Caste</strong></td> 	<td>{{ Session::get('studentdb')->pols }}</td>									
								</tr>
								<tr>
									<td width="150" align="right"><strong>Physically Challenged:</strong></td> 		<td colspan="5">{{ Session::get('studentdb')->dist }}</td>									
								</tr>
								
								
							</tbody>
						</table>
					</div>					
				</div>

				<div class="row">
					<div class="col-sm-12">						
						<table class="table table-bordered">					
							<tbody>
								<tr>
									<td width="150" align="right"><strong>Village:</strong></td> 		<td>{{ Session::get('studentdb')->vill }}</td>
									<td width="150" align="right"><strong>Post Office:</strong></td> 	<td>{{ Session::get('studentdb')->post }}</td>
									<td width="150" align="right"><strong>Police Station</strong></td> 	<td>{{ Session::get('studentdb')->pols }}</td>									
								</tr>
								<tr>
									<td width="150" align="right"><strong>District:</strong></td> 		<td>{{ Session::get('studentdb')->dist }}</td>
									<td width="150" align="right"><strong>Pin No:  </strong></td> 		<td>{{ Session::get('studentdb')->pinn }}</td>
									<td width="150" align="right"><strong>State: </strong></td> 		<td>{{ Session::get('studentdb')->status }}</td>
								</tr>
								
								
							</tbody>
						</table>
					</div>					
				</div>

				<div class="row">
					<div class="col-sm-12">						
						<table class="table table-bordered">					
							<tbody>
								<tr><td width="150" align="right"><strong>Father Name:</strong></td> <td>{{ Session::get('studentdb')->fname }}</td>
									<td width="150" align="right"><strong>Aadhar No:  </strong></td> <td>{{ Session::get('studentdb')->fadhaar }}</td>
									<td width="150" align="right"><strong>Occupation: </strong></td> <td>{{ Session::get('studentdb')->foccup }}</td>
									<td width="150" align="right"><strong>Mobile No:  </strong></td> <td>{{ Session::get('studentdb')->fmobno }}</td>
								</tr>
								<tr><td width="150" align="right"><strong>Mother Name:</strong></td> <td>{{ Session::get('studentdb')->mname }}</td>
									<td width="150" align="right"><strong>Aadhar No:  </strong></td> <td>{{ Session::get('studentdb')->madhaar }}</td>
									<td width="150" align="right"><strong>Occupation: </strong></td> <td>{{ Session::get('studentdb')->moccup }}</td>
									<td width="150" align="right"><strong>Mobile No:  </strong></td> <td>{{ Session::get('studentdb')->mmobno }}</td>
								</tr>
								<tr><td width="150" align="right"><strong>Gurdian Name:</strong></td> <td>{{ Session::get('studentdb')->gname }}</td>
									<td width="150" align="right"><strong>Aadhar No:  </strong></td> <td>{{ Session::get('studentdb')->gadhaar }}</td>
									<td width="150" align="right"><strong>Occupation: </strong></td> <td>{{ Session::get('studentdb')->goccup }}</td>
									<td width="150" align="right"><strong>Mobile No:  </strong></td> <td>{{ Session::get('studentdb')->gmobno }}</td>
								</tr>
								<tr>
									<td width="150" align="right"><strong>Family Status:</strong></td> <td colspan="3">{{ Session::get('studentdb')->fmlystatus }}</td>
									<td width="150" align="right"><strong>Description:  </strong></td> <td colspan="3">{{ Session::get('studentdb')->fmlystatusdsc }}</td>									
								</tr>
								
							</tbody>
						</table>
					</div>					
				</div>

				<div class="row">
					<div class="col-sm-12">						
						<table class="table table-bordered">					
							<tbody>
								<tr>
									<td width="150" align="right"><strong>Bank Name:</strong></td> <td>{{ Session::get('studentdb')->bankname }}</td>
									<td width="150" align="right"><strong>Branch:  </strong></td> <td>{{ Session::get('studentdb')->branch }}</td>
									<td width="150" align="right"><strong>IFSC: </strong></td> <td>{{ Session::get('studentdb')->ifsc }}</td>									
								</tr>
								<tr>
									<td width="150" align="right"><strong>Account No:</strong></td> <td colspan="3">{{ Session::get('studentdb')->accno }}</td>
									<td width="150" align="right"><strong>Type:</strong></td> <td>{{ Session::get('studentdb')->acctype }}</td>									
								</tr>								
							</tbody>
						</table>
					</div>					
				</div>
				
				
				<br><br>
				<div class="form-group">
					<div class="col-sm-12">
						<button type="reset"  class="btn btn-default ">Reset</button>
						<button type="submit" class="btn btn-success pull-right">Save & ......Finalize</button>
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
