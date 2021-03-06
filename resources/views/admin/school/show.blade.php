@extends('admin.layouts.baselayout')
@section('title','School Index')

@section('header')
	@include('admin.layouts.navbar')
@endsection

@section('body-content-sidebar')
    @include('admin.layouts.sidebar')

@endsection

@section('body-content-content')
    <h1>School/Index Page</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>DISE Code</td>
                <td>Village</td>
                <td>Post</td>
                <td>PS</td>
                <td>Dist</td>
                <td>Pin</td>
                <td>
                    Action
                </td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $school->id }}</td>
                <td>{{ $school->name }}</td>
                <td>{{ $school->dise }}</td>
                <td>{{ $school->vill }}</td>
                <td>{{ $school->post }}</td>
                <td>{{ $school->pstn }}</td>
                <td>{{ $school->dist }}</td>
                <td>{{ $school->pin }}</td>
                <td>
                    <a href="{{ route('schools.index') }}" class="btn btn-primary">Back</a><br>
                </td>
        </tbody>
    </table>

















<script type="text/javascript">
	$(document).ready(function(e){
		
	});  
</script>

@endsection

@section('footer')
	@include('admin.layouts.footer')
@endsection
