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
				{{--  
				@foreach($accountparticulars as $accountparticular)
					{{ $accountparticular }}<br>
				@endforeach  
				--}}
				<div class="form-group">
					{{--  <label for="user" class="col-sm-offset-6 col-sm-1 control-label">User</label>
					<div class="col-sm-2">						
						<input type="text" class="form-control" name="user" id="user" value="{{  Auth::user()->name }}" readonly>
					</div>  --}}
					
					{{--  <label for="date" class="col-sm-1 control-label">Date</label>
					<div class="col-sm-2">
						@php $date = date('Y-m-d H:i:s');	@endphp
						<input type="text" class="form-control" name="date" id="date" value="{{  $date }}" readonly>
					</div>  --}}
				</div>
				<br>
				
				
				<div class="form-group {{ $errors->has('accounttype') ? 'has-error' : ''}}">
					<label for="accounttype" class="col-sm-2 control-label">Account Type</label>
					<div class="col-sm-8">
						<select class="form-control" name="accounttype" id="accounttype">
							<option value=""></option>
							@foreach($data as $key => $value)
								<option value="{{ $key }}">{{ $key }}</option>
							@endforeach
						</select>
					</div>					
				</div>

				<div class="form-group {{ $errors->has('acctype') ? 'has-error' : ''}}">
					<label for="particular" class="col-sm-2 control-label">Particulars</label>
					<div class="col-sm-8">
						<select class="form-control" name="accountparticular_id" id="particular">
							<option value=""></option>							
						</select>
					</div>					
				</div>	
				
				<div class="form-group {{ $errors->has('amount') ? 'has-error' : ''}}">
					<label for="amount" class="col-sm-2 control-label">Amount</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="amount" id="amount" placeholder="Enter Current Amount" value={{ old('amount') }}>
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
		//alert('hello');
		var datas = {!! json_encode($data) !!}

		$("#accounttype").change(function () {
			var val = $(this).val();
			var str = "<option value=''></option>";
			
			$.each( datas, function( key, value ) {
				//console.log(key);				
				if(val == key){
					$.each( value, function( key, val ){
						console.log(key);
						str = str + '<option vallue="'+key+'" >'+val+'</option>';
					});
				}
			});
			//console.log(str);
			$("#particular").html(str);
		});  
	});  
</script>

@endsection

@section('footer')
	@include('admin.layouts.footer')
@endsection
