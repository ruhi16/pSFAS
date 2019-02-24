@extends('admin.layouts.baselayout')
@section('title','School Index')

@section('header')
	@include('admin.layouts.navbar')
@endsection

@section('body-content-sidebar')
    @include('admin.layouts.sidebar')

@endsection

@section('body-content-content')
    <h1>School/Create Page</h1>
    

		<div class="panel panel-default">
			<div class="panel-body">
            
			{!! Form::open(['method'=>'PUT',   'route'=>['schools.update', $school ], 'class'=>'form-horizontal']) !!}

				<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
					<label for="name" class="col-sm-2 control-label">Name</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="name" id="name" placeholder="School Name" value="{{ $school->name }}">
						{!! $errors->first('name', '<p class="help-block">:message</p>') !!}
					</div>
				</div>

				<div class="form-group {{ $errors->has('dise') ? 'has-error' : ''}}">
					<label for="dise" class="col-sm-2 control-label">DISE CODE</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="dise" id="dise" placeholder="School DISE Code" value="{{ $school->dise }}">
						{!! $errors->first('dise', '<p class="help-block">:message</p>') !!}
					</div>
				</div>

				<div class="form-group {{ $errors->has('vill') || $errors->has('post') ? 'has-error' : ''}}">
					<label for="vill" class="col-sm-2 control-label">Village</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" name="vill" id="vill" placeholder="Village" value="{{ $school->vill }}">
						{!! $errors->first('vill', '<p class="help-block">:message</p>') !!}
					</div>
					<label for="post" class="col-sm-2 control-label">Post Office</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" name="post" id="post" placeholder="Post Office" value="{{ $school->post }}">
						{!! $errors->first('post', '<p class="help-block">:message</p>') !!}
					</div>
				</div>
				
				<div class="form-group {{ ($errors->has('pstn')||$errors->has('dist')||$errors->has('pin')) ? 'has-error' : ''}}">
					<label for="pstn" class="col-sm-2 control-label">Police Station</label>
					<div class="col-sm-3">
						<input type="text" class="form-control" name="pstn" id="pstn" placeholder="Police Station" value="{{ $school->pstn }}">
						{!! $errors->first('pstn', '<p class="help-block">:message</p>') !!}
					</div>
					<label for="dist" class="col-sm-1 control-label">District</label>
					<div class="col-sm-3">
						<input type="text" class="form-control" name="dist" id="dist" placeholder="District" value="{{ $school->dist }}">
						{!! $errors->first('dist', '<p class="help-block">:message</p>') !!}
					</div>
					<label for="pin" class="col-sm-1 control-label">Pin</label>
					<div class="col-sm-2">
						<input type="text" class="form-control" name="pin" id="pin" placeholder="Pin Number" value="{{ $school->pin }}">
						{!! $errors->first('pin', '<p class="help-block">:message</p>') !!}
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
