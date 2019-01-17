@extends('admin.layouts.baselayout')
@section('title','Admin Home')

@section('header')
	@include('admin.layouts.navbar')
@endsection

@section('body-content-sidebar')
    @include('admin.layouts.sidebar')

@endsection

@section('body-content-content')
    @include('admin.layouts.content')
    <br>
	<a href="{{ route('schools.index') }}">Index</a><br>
	<a href="{{ url('/schools')}}">create</a><br>
	<a href="">Store</a><br>
	<a href="">show One</a><br>
	<a href="">Edit</a><br>
	<a href="">Update</a><br>
	<a href="">Delete</a><br>





<script type="text/javascript">
	$(document).ready(function(e){
		
	});  
</script>

@endsection

@section('footer')
	@include('admin.layouts.footer')
@endsection
