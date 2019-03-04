@extends('admin.layouts.baselayout')
@section('title','School Index')

@section('header')
	@include('admin.layouts.navbar')
@endsection

@section('body-content-sidebar')
    @include('admin.layouts.sidebar')

@endsection

@section('body-content-content')
    <h1>Class > Edit Page</h1>   

		<div class="panel panel-default">
			<div class="panel-body">
			@if( $errors->any() ) 				
				@foreach($errors->all() as $error)					
					<div class="alert alert-danger">
						<strong>Danger!</strong> {{ $error }}
					</div>
				@endforeach				
			@endif
            
			{!! Form::open(['method'=>'PUT',   'route'=>['miscoptiontables.update', $miscoptiontable ], 'class'=>'form-horizontal']) !!}

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
						<input type="text" class="form-control col-sm-9" name="options" value="{{ $miscoptiontable->option ?? ''}}">						
					</div>										
				</div>
				<div class="form-group">
					<label for="remarks" class="col-sm-3 control-label">Remarks</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" name="remarks" id="remarks" value="{{ $miscoptiontable->remarks ?? ''}}">
					</div>
					<label for="status" class="col-sm-1 control-label">Status</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" name="status" id="status" value="{{ $miscoptiontable->status ?? ''}}">
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

		var tbl= {!! json_encode($miscoptiontable->table_name) !!};		
		var fld= {!! json_encode($miscoptiontable->field_name) !!};	
		$('#tables option[value="'+tbl+'"]').attr("selected", "selected");	

		var datas = {!! json_encode($tabledatas) !!}
		var str = "<option value=''></option>";
		$.each( datas, function( key, value ) {			
			if(tbl == key){
				$.each( value, function( key, val ){
					if(val == fld){
						str = str + '<option vallue="'+val+'" selected>'+val+'</option>';
					}else{
						str = str + '<option vallue="'+val+'" >'+val+'</option>';
					}
				});
			}
		});
		$("#fields").html(str);
		
		



		$("#tables").change(function () {
			var val = $(this).val();
			var str = "<option value=''></option>";

			$.each( datas, function( key, value ) {
				if(val == key){
					$.each( value, function( key, val ){
						str = str + '<option vallue="'+val+'" >'+val+'</option>';
					});
				}
			});
			$("#fields").html(str);
		}); 
	});  
</script>

@endsection

@section('footer')
	@include('admin.layouts.footer')
@endsection
