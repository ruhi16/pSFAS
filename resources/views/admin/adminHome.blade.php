@extends('admin.layouts.baselayout')
@section('title','Admin Home')

@section('header')
	@include('admin.layouts.navbar')
@endsection

@section('body-content-sidebar')
    @include('admin.layouts.sidebar')

@endsection

@section('body-content-content')
    
    <br>
	<a href="{{ route('schools.index') }}" class="btn btn-warning">School</a>
	{{-- <a href="{{ url('/schools')}}">Index</a><br> --}}

	<a href="{{ route('sessions.index') }}" class="btn btn-success">Session</a>
	{{-- <a href="{{ url('/sessions')}}">Session</a><br> --}}
	
	<a href="{{ route('clsss.index') }}" class="btn btn-info">Class</a>
	{{-- <a href="{{ url('/sessions')}}">Session</a><br> --}}

	<a href="{{ route('sections.index') }}" class="btn btn-danger">Section</a><br>
	{{-- <a href="{{ url('/sessions')}}">Session</a><br> --}}


	<br>
	<a href="{{ route('admin.clsssections') }}" class="btn btn-primary">Class-Section</a>
	{{-- <a href="{{ url('/sessions')}}">Session</a><br> --}}

	<a href="#" class="btn btn-warning">Fees Schedules</a><br>


	<br>
	@include('admin.layouts.content')


<script type="text/javascript">
	$(document).ready(function(e){
		
	});  
</script>

@endsection

@section('footer')
	@include('admin.layouts.footer')
@endsection
