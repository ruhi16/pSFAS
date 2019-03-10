@extends('admin.layouts.baselayout')
@section('title','School Index')

@section('header')
	@include('admin.layouts.navbar')
@endsection

@section('body-content-sidebar')
    @include('admin.layouts.sidebar')
@endsection

@section('body-content-content')
	
	{{--  @if( $errors->any() ) 
		<ul class="validation-errors">
		@foreach($errors->all() as $error)
			<li class="validation-error-item">{{ $error }}</li>
		@endforeach
		</ul>
	@endif  --}}
	<h1>School / Create Page</h1>
		<div class="panel panel-default">
			<div class="panel-body">
			
			{!! Form::open(['method'=>'POST',   'route'=>['accountparticulars.store'], 'class'=>'form-horizontal']) !!}

				<div class="form-group {{ $errors->has('particular') ? 'has-error' : ''}}">
					<label for="name" class="col-sm-2 control-label">Particular:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="particular" id="particular" placeholder="Account Paticular" value="{{ old('particular') }}">
						{!! $errors->first('particular', '<p class="help-block">:message</p>') !!}
					</div>
				</div>

				<div class="form-group {{ $errors->has('acctype') ? 'has-error' : ''}}">
					<label for="acctype" class="col-sm-2 control-label">Account Type</label>
					<div class="col-sm-8">
						<select class="form-control" name="acctype" id="acctype">
							<option value=""></option>
							<option value="Income">	Income</option>
							<option value="Expense">Expense</option>
						</select>
					</div>
					{{-- <div class="col-sm-8">
						<input type="text" class="form-control" name="acctype" id="acctype" placeholder="Account Type" value="{{ old('acctype') }}">
						{!! $errors->first('acctype', '<p class="help-block">:message</p>') !!}
					</div> --}}
				</div>

				<div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
					<label for="status" class="col-sm-2 control-label">Status</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="status" id="status" placeholder="Status, Active or In-active" value="{{ old('acctype') }}">
						{!! $errors->first('acctype', '<p class="help-block">:message</p>') !!}
					</div>
				</div>

				<div class="form-group {{ $errors->has('remarks') ? 'has-error' : ''}}">
					<label for="remarks" class="col-sm-2 control-label">Remarks</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="remarks" id="remarks" placeholder="Remarks if any" value="{{ old('remarks') }}">
						{!! $errors->first('acctype', '<p class="help-block">:message</p>') !!}
					</div>
				</div>

				{{--<div class="form-group {{ $errors->has('vill') || $errors->has('post') ? 'has-error' : ''}}">
					<label for="vill" class="col-sm-2 control-label">Village</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" name="vill" id="vill" placeholder="Village" value="{{ old('vill') }}">
						{!! $errors->first('vill', '<p class="help-block">:message</p>') !!}
					</div>
					<label for="post" class="col-sm-2 control-label">Post Office</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" name="post" id="post" placeholder="Post Office" value="{{ old('post') }}">
						{!! $errors->first('post', '<p class="help-block">:message</p>') !!}
					</div>
				</div>
				
				<div class="form-group {{ ($errors->has('pstn')||$errors->has('dist')||$errors->has('pin')) ? 'has-error' : ''}}">
					<label for="pstn" class="col-sm-2 control-label">Police Station</label>
					<div class="col-sm-3">
						<input type="text" class="form-control" name="pstn" id="pstn" placeholder="Police Station" value="{{ old('pstn') }}">
						{!! $errors->first('pstn', '<p class="help-block">:message</p>') !!}
					</div>
					<label for="dist" class="col-sm-1 control-label">District</label>
					<div class="col-sm-3">
						<input type="text" class="form-control" name="dist" id="dist" placeholder="District" value="{{ old('dist') }}">
						{!! $errors->first('dist', '<p class="help-block">:message</p>') !!}
					</div>
					<label for="pin" class="col-sm-1 control-label">Pin</label>
					<div class="col-sm-2">
						<input type="text" class="form-control" name="pin" id="pin" placeholder="Pin Number" value="{{ old('pin') }}">
						{!! $errors->first('pin', '<p class="help-block">:message</p>') !!}
					</div>
				</div>--}}
				
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
