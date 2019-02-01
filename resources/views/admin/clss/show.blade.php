@extends('admin.layouts.baselayout')
@section('title','School Index')

@section('header')
	@include('admin.layouts.navbar')
@endsection

@section('body-content-sidebar')
    @include('admin.layouts.sidebar')

@endsection

@section('body-content-content')
    <h1>Class > Show Page</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Class Name</th>
                <th>Status</th>
                <th>Next Class Name</th>                
                <th>
                    Action
                    {{-- <a href="{{ route('clsss.create') }}" class="btn btn-success"><spna class="glyphicon glyphicon-pencil"></spna></a> --}}
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $clss->id }}</td>
                <td>{{ $clss->name }}</td>
                <td>{{ $clss->status }}</td>
                <td>{{ $clss->next_clss_id }}</td>                
                <td>
                    <a href="{{ route('clsss.index') }}" class="btn btn-primary">Back</a><br>
                    {{--  <a href="{{ route('sessions.show',    ['session' => $session]) }}" class="btn btn-primary"><spna class="glyphicon glyphicon-eye-open"></spna></a>  --}}
                    {{--  <a href="{{ route('sessions.edit',    ['session' => $session]) }}" class="btn btn-warning"><spna class="glyphicon glyphicon-edit"></spna></a>  --}}
                    {{--  {!! Form::open(['method'=>'DELETE', 'route'=>['sessions.destroy', $session], 'style'=>'display:inline']) !!}                                        
                        {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}                    
                    {{ Form::close() }}  --}}
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
