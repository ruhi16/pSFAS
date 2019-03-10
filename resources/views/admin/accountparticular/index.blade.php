@extends('admin.layouts.baselayout')
@section('title','School Index')

@section('header')
	@include('admin.layouts.navbar')
@endsection

@section('body-content-sidebar')
    @include('admin.layouts.sidebar')

@endsection

@section('body-content-content')  
    
    <h1>Account Particular > Index Page</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>DISE Code</th>
                <th>Village</th>
                <th>Post</th>
                <th>PS</th>
                <th>Dist</th>
                <th>Pin</th>
                <th>
                    Action
                     <a href="{{ route('accountparticulars.create') }}" class="btn btn-success pull-right"><spna class="glyphicon glyphicon-plus"></spna></a> 
                </th>
            </tr>
        </thead>
        <tbody>
          
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
