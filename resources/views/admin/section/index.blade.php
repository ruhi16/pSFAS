@extends('admin.layouts.baselayout')
@section('title','Session Index')

@section('header')
	@include('admin.layouts.navbar')
@endsection

@section('body-content-sidebar')
    @include('admin.layouts.sidebar')

@endsection

@section('body-content-content')
    <h1>Session/Index Page</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>                
                <th>Status</th>
                <th>Session</th>                
                <th>
                    Action
                    <a href="{{ route('sections.create') }}" class="btn btn-success pull-right"><spna class="glyphicon glyphicon-pencil"></spna></a>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($sections as $section)
            <tr>
                <td>{{ $section->id }}</td>
                <td>{{ $section->name }}</td>                
                <td>{{ $section->status }}</td>      
                <td>{{ $section->session->name }}</td>
                <td>
                    <a href="{{ route('sections.show',    ['section' => $section]) }}" class="btn btn-primary"><spna class="glyphicon glyphicon-eye-open"></spna></a>
                    <a href="{{ route('sections.edit',    ['section' => $section]) }}" class="btn btn-warning"><spna class="glyphicon glyphicon-edit"></spna></a>
                    {!! Form::open(['method'=>'DELETE', 'route'=>['sections.destroy', $section], 'style'=>'display:inline']) !!}                                        
                        {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}                    
                    {{ Form::close() }}
                </td>
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
