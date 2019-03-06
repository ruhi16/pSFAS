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
