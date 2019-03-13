@extends('admin.layouts.baselayout')
@section('title','Session Index')

@section('header')
	@include('admin.layouts.navbar')
@endsection

@section('body-content-sidebar')
    @include('admin.layouts.sidebar')

@endsection

@section('body-content-content')
    <h2>Logrecords > Index Page</h2>
    <table class="table table-condensed table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>User</th>                
                <th>Model</th>
                <th>Functions</th> 
                <th>Effc Col Id</th>               
                <th>Session</th>
                <th>Date & Time</th>
                <th>Status</th>
                <th>Remarks</th>
                <th>
                    Action
                    {{--  <a href="{{ route('sections.create') }}" class="btn btn-success pull-right"><spna class="glyphicon glyphicon-pencil"></spna></a>  --}}
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($logrecords as $logrecord)
                <tr>
                    <td>{{ $logrecord->id }}</td>
                    <td>{{ $logrecord->user_id }}</td>
                    <td>{{ $logrecord->model_name }}</td>
                    <td>{{ $logrecord->method_name }}</td>
                    <td>{{ $logrecord->effected_col_id }}</td>
                    <td>{{ $logrecord->session_id }}</td>
                    <td>{{ $logrecord->created_at }}</td>
                    <td>{{ $logrecord->status }}</td>
                    <td>{{ $logrecord->remarks }}</td>
                    <td>
                        <a href="{{ route('logrecords.index') }}" class="btn btn-xs btn-success pull-right">Back</a>
                    </td>
                </tr>
            @endforeach
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
