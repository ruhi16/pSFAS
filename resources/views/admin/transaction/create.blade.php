@extends('admin.layouts.baselayout')
@section('title','School Index')

@section('header')
	@include('admin.layouts.navbar')
@endsection

@section('body-content-sidebar')
    @include('admin.layouts.sidebar')
@endsection

@section('body-content-content')
    <h1>Transaction > Create Page</h1>
		<div class="panel panel-default">
			<div class="panel-body">
			
			@if( $errors->any() ) 						
				<p class="alert alert-danger">
				@foreach($errors->all() as $error)
					<strong>{{ $error }}</strong><br>
				@endforeach		
				</p>				
			@endif 

			{!! Form::open(['method'=>'POST',   'route'=>['transactions.store'], 'class'=>'form-horizontal']) !!}
				@foreach($accountparticulars as $accountparticular)
					{{ $accountparticular }}<br>
				@endforeach
				<div class="form-group {{ $errors->has('acctype') ? 'has-error' : ''}}">
					<label for="acctype" class="col-sm-2 control-label">Account Type</label>
					<div class="col-sm-8">
						<select class="form-control" name="acctype" id="acctype">
							<option value=""></option>
							<option value="Income">	Income</option>
							<option value="Expense">Expense</option>
						</select>
					</div>					
				</div>

				<div class="form-group {{ $errors->has('acctype') ? 'has-error' : ''}}">
					<label for="acctype" class="col-sm-2 control-label">Particulars</label>
					<div class="col-sm-8">
						<select class="form-control" name="acctype" id="acctype">
							<option value=""></option>
							<option value="Income">	Income</option>
							<option value="Expense">Expense</option>
						</select>
					</div>					
				</div>	

				@foreach($accountparticulars->groupBy('acctype') as $key => $val)
				
					 :{{$val }}
				
				@endforeach
				{{-- {{ dd($totalData) }} --}}
				{{--  <div class="form-group">
					<label for="name" class="col-sm-3 control-label">Class Name</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" name="name" id="name" placeholder="New Class Name" value={{ old('name') }}>
					</div>
					<label for="status" class="col-sm-1 control-label">Status</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" name="status" id="status" placeholder="Current Status" value={{ old('status') }}>
					</div>
				</div>				
				<div class="form-group">
					<label for="next_clss_id" class="col-sm-3 control-label">Next Class Id</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" name="next_clss_id" id="next_clss_id" placeholder="Next Class id" value={{ old('next_clss_id') }}>
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
				</div>  --}}


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
