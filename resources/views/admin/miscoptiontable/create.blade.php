@extends('admin.layouts.baselayout')
@section('title','School Index')

@section('header')
	@include('admin.layouts.navbar')
@endsection

@section('body-content-sidebar')
    @include('admin.layouts.sidebar')
@endsection

@section('body-content-content')
    <h1>Class > Create Page</h1>
		<div class="panel panel-default">
			<div class="panel-body">

			@if( $errors->any() ) 				
				@foreach($errors->all() as $error)
					{{--  <li class="validation-error-item">{{ $error }}</li>  --}}
					<div class="alert alert-danger">
						<strong>Danger!</strong> {{ $error }}
					</div>
				@endforeach				
			@endif

			{!! Form::open(['method'=>'POST',   'route'=>['miscoptiontables.store'], 'class'=>'form-horizontal']) !!}

				<div class="form-group">
					<label for="name" class="col-sm-3 control-label">Table</label>
					<div class="col-sm-4">
						<select class="form-control" name="tables" id="tables">
							<option value=""></option>
							@foreach($tabledatas as $key => $tabledata)
								<option value="{{ $key }}">{{ $key }}</option>
							@endforeach
						</select>						
					</div>
					<label for="status" class="col-sm-1 control-label">Field</label>
					<div class="col-sm-4">
						<select class="form-control" name="fields" id="fields">
							<option value=''></option>
						</select>						
					</div>
				</div>

				<div class="form-group">
					<label for="options" class="col-sm-3 control-label">Option</label>
					<div class="col-sm-9">
						<input type="text" class="form-control col-sm-9" name="options" value="" data-role="tagsinput" >						
					</div>										
				</div>
				
				<div class="form-group">
					<label for="remarks" class="col-sm-3 control-label">Remarks</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" name="remarks" id="remarks" placeholder="Enter Remarks if any">
					</div>
					<label for="status" class="col-sm-1 control-label">Status</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" name="status" id="status" placeholder="Current Status">
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



//for multiselect tags in text box		
<link rel="stylesheet" href="{{ url('bs337/bstags/bootstrap-tagsinput.css') }}">
<script src="{{ url('bs337/bstags/jquery-2.2.4.min.js') }}"></script>
<script src="{{ url('bs337/bstags/bootstrap-tagsinput.min.js') }}"></script>



<script type="text/javascript">
	$(document).ready(function(e){
		var datas = {!! json_encode($tabledatas) !!}

		$("#tables").change(function () {
			var val = $(this).val();
			var str = "<option value=''></option>";

			$.each( datas, function( key, value ) {
				//console.log(key);				
				if(val == key){
					$.each( value, function( key, val ){
						//console.log(val);
						str = str + '<option vallue="'+val+'" >'+val+'</option>';
					});
				}
			});
			//console.log(str);
			$("#fields").html(str);
		});  
	});
</script>

@endsection

@section('footer')
	@include('admin.layouts.footer')
@endsection
