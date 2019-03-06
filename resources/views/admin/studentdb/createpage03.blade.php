@extends('admin.layouts.baselayout')
@section('title','School Index')

@section('header')
	@include('admin.layouts.navbar')
@endsection

@section('body-content-sidebar')
    @include('admin.layouts.sidebar')
@endsection

@section('body-content-content')
	<h2>Student DB > Create Page 03 : Bank Information Details</h2>
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
		
			
			{!! Form::open(['method'=>'POST',   'route'=>['admin.studentdb.createpage03.store'], 'class'=>'form-horizontal']) !!}

				<div class="form-group">
					<div class="col-sm-4">
						<label for="bankname">Bank Name:</label>
						<input type="text" class="form-control" name="bankname" id="bankname" value="{{ old('bankname')  ?? Session::get('studentdb')->bankname ?? ''}}">
					</div>
					<div class="col-sm-3">
						<label for="branch">Branch:</label>
						<input type="text" class="form-control" name="branch" id="branch" value="{{ old('branch')  ?? Session::get('studentdb')->branch ?? ''}}">
					</div>
					<div class="col-sm-3">
						<label for="ifsc">IFSC:</label>
						<input type="text" class="form-control" name="ifsc" id="ifsc" value="{{ old('ifsc')  ?? Session::get('studentdb')->ifsc ?? ''}}">
					</div>					
				</div>


				<div class="form-group">
					<div class="col-sm-7">
						<label for="accno">Account No:</label>
						<input type="text" class="form-control" name="accno" id="accno" value="{{ old('accno')  ?? Session::get('studentdb')->accno ?? ''}}">
					</div>
					<div class="col-sm-5">
						<label for="acctype">Account Type:</label>
						<input type="text" class="form-control" name="acctype" id="acctype" value="{{ old('acctype') ?? Session::get('studentdb')->acctype ?? ''}}">
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

		





<script type="text/javascript">
	$(document).ready(function(e){
		
	});  
</script>

@endsection

@section('footer')
	@include('admin.layouts.footer')
@endsection
