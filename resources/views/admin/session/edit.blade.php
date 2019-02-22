@extends('admin.layouts.baselayout')
@section('title','School Index')

@section('header')
	@include('admin.layouts.navbar')
@endsection

@section('body-content-sidebar')
    @include('admin.layouts.sidebar')

@endsection

@section('body-content-content')
    <h1>Session/Edit Page</h1>   

		<div class="panel panel-default">
			<div class="panel-body">
            
			{!! Form::open(['method'=>'PUT',   'route'=>['sessions.update', $session ], 'class'=>'form-horizontal']) !!}

				<div class="form-group">
					<label for="name" class="col-sm-2 control-label">Name</label>
					<div class="col-sm-5">
						<input type="text" class="form-control" name="name" id="name" placeholder="Session Name" value="{{ $session->name }}">
					</div>
					<label for="status" class="col-sm-1 control-label">Status</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" name="status" id="status" placeholder="Status" value="{{ $session->status }}" readonly>
					</div>
				</div>				
				<div class="form-group">
					<label for="stdate" class="col-sm-2 control-label">Start at</label>
					<div class="col-sm-4">
						<input type="date" class="form-control" name="stdate" id="stdate" placeholder="Start Date" value="{{ $session->stdate }}">
					</div>
					<label for="post" class="col-sm-2 control-label">End on</label>
					<div class="col-sm-4">
						<input type="date" class="form-control" name="endate" id="endate" placeholder="End Date" value="{{ $session->endate }}">
					</div>
				</div>
				<div class="form-group">
					<label for="prevsession" class="col-sm-2 control-label">Prev Sestion</label></label>
					<div class="col-sm-3">
						<input type="text" class="form-control" name="prevsession" id="pstn" placeholder="Previsous Session" value="{{ $session->prevsession_id}}">
					</div>
					<label for="nextsession" class="col-sm-offset-1 col-sm-2 control-label">Next Session</label>
					<div class="col-sm-3">
						<input type="text" class="form-control" name="nextsession" id="nextsession" placeholder="Previous Session" value="{{ $session->nextsession_id}}">
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
