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
                <th>Particular</th>
                <th>Account Type</th>
                <th>Status</th>
                <th>Remarks</th>   
                <th>Session</th>                             
                <th>
                    Action
                     <a href="{{ route('accountparticulars.create') }}" class="btn btn-success pull-right"><spna class="glyphicon glyphicon-plus"></spna></a> 
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($accountparticulars as $accountparticular)
            <tr>
                <td>{{ $accountparticular->id }}</td>
                <td>{{ $accountparticular->particular }}</td>
                <td>{{ $accountparticular->acctype }}</td>
                <td>{{ $accountparticular->status }}</td>
                <td>{{ $accountparticular->remarks }}</td>
                <td>{{ $accountparticular->session_id }}</td>
                <td>
                    <a href="{{ route('accountparticulars.show',    ['accountparticular' => $accountparticular]) }}" class="btn btn-primary"><spna class="glyphicon glyphicon-eye-open"></spna></a>
                    <a href="{{ route('accountparticulars.edit',    ['accountparticular' => $accountparticular]) }}" class="btn btn-warning"><spna class="glyphicon glyphicon-edit"></spna></a>
                    {!! Form::open(['method'=>'DELETE', 'route'=>['accountparticulars.destroy', $accountparticular], 'style'=>'display:inline']) !!}                    
                        {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}                    
                    {{ Form::close() }}
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
