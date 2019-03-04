@extends('admin.layouts.baselayout')
@section('title','School Index')

@section('header')
	@include('admin.layouts.navbar')
@endsection

@section('body-content-sidebar')
    @include('admin.layouts.sidebar')
@endsection

@section('body-content-content')
    <h1>Student DB > Create Page 05 : Students Bank Account Information Details</h1>
		<div class="panel panel-default">
			<div class="panel-body">

				{{--  {!! Form::open(['method'=>'POST',   'route'=>['studentdbs.store'], 'class'=>'form-horizontal']) !!}

					<div class="form-group">
						<label for="name" class="col-sm-2 control-label">Student Name</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" name="name" id="name" placeholder="Student Name">
						</div>                    
					</div>	

					<div class="form-group">
						<label for="fname" class="col-sm-2 control-label">Father Name</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="fname" id="fname" placeholder="Student Father Name">
						</div>                    
					</div>	

					<div class="form-group">
						<label for="clss" class="col-sm-2 control-label">New Class</label>
						<div class="col-sm-4">
							<select name="clss" class="form-control">
								<option value=""></option>
								@foreach($clsss as $clss)
									<option value="{{ $clss->id }}">{{ $clss->name }}</option>
								@endforeach
							</select>
						</div>                    
					</div>					
					
					
					<div class="form-group">
						<label for="status" class="col-sm-2 control-label">Status</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" name="status" id="status" placeholder="any remarks want to submit">
						</div>                    
					</div>



					<button type="reset" class="col-sm-offset-2 btn btn-default">Reset</button>
					<button type="submit" class=" btn btn-primary">Save changes</button>              


					{!! Form::close() !!}  --}}
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
