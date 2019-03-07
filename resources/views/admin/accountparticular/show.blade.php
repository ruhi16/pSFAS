@extends('admin.layouts.baselayout')
@section('title','School Index')

@section('header')
	@include('admin.layouts.navbar')
@endsection

@section('body-content-sidebar')
    @include('admin.layouts.sidebar')

@endsection

@section('body-content-content')
    <h1>Account particular / Show Page</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Particular</th>
                <th>Account Type</th>
                <th>Status</th>
                <th>Remarks</th>                                
                <th>
                    Action
                     <a href="{{ route('accountparticulars.create') }}" class="btn btn-success pull-right"><spna class="glyphicon glyphicon-plus"></spna></a> 
                </th>
            </tr>
        </thead>
        <tbody>            
            <tr>
                <td>{{ $accountparticular->id }}</td>
                <td>{{ $accountparticular->particular }}</td>
                <td>{{ $accountparticular->acctype }}</td>
                <td>{{ $accountparticular->status }}</td>
                <td>{{ $accountparticular->remarks }}</td>
                <td>
                    <a href="{{ route('accountparticulars.index') }}" class="btn btn-primary">Back</a>                    
                </td>
            </tr>
            
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
