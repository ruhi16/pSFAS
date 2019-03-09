@extends('admin.layouts.baselayout')
@section('title','School Index')

@section('header')
	@include('admin.layouts.navbar')
@endsection

@section('body-content-sidebar')
    @include('admin.layouts.sidebar')
@endsection

@section('body-content-content')
	<h2>Student DB > Create Page 04 : Photo & Signature Upload</h2>
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
			
			
			 @if ($message = Session::get('success'))
				<div class="alert alert-success alert-block">
					<button type="button" class="close" data-dismiss="alert">×</button>
					<strong>{{ $message }}</strong>
				</div>
				<img src="images/{{ Session::get('image') }}" width="180px" align="center" border="1">
			@endif

			{{-- {!! Form::open(['method'=>'POST',   'route'=>['admin.studentdb.createpage04.store'], 'files' => 'true', 'class'=>'form-horizontal', 'enctype' => 'multiport/form-data']) !!}  --}}
			<form action="{{ route('admin.studentdb.createpage04.store') }}" method="POST" enctype="multipart/form-data">
			@csrf
			
				<div class="form-group">
					<table class="table table-bordered">
						<tbody>
							<tr>
								<td width="40%" align="right">
									<label for="select-file">Select File to Upload</label>
								</td>
								<td width="30">
									<input type="file" name="imagefile" accept=".png, .jpg, .jpeg" />								
								</td>
								<td width="30%" align="left">
									<input type="submit" name="upload" class="btn btn-primary" value="upload">
								</td>
							</tr>
						</tbody>
					</table>
				</div>
						

			{{-- </form> --}}
			{!! Form::close() !!} 


			<br><br>
			<div class="form-group">
				<div class="col-sm-12">
					<button class="btn btn-default ">Reset</button>
					<a href="{{ route('admin.studentdb.createpage05')}}" class="btn btn-success pull-right">Save & Goto Next Page</a>
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
