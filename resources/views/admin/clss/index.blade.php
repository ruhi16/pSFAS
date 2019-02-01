@extends('admin.layouts.baselayout')
@section('title','Class Index')

@section('header')
	@include('admin.layouts.navbar')
@endsection

@section('body-content-sidebar')
    @include('admin.layouts.sidebar')

@endsection

@section('body-content-content')
    <h1>Class > Index Page</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Next Class</th>
                <th>Status</th>                
                <th>
                    Action
                    <a href="{{ route('clsss.create') }}" class="btn btn-success pull-right"><spna class="glyphicon glyphicon-pencil"></spna></a>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($clsss as $clss)
            <tr>
                <td>{{ $clss->id }}</td>
                <td>{{ $clss->name }}</td>
                <td>{{ $clss->next_clss_id }}</td>
                <td>{{ $clss->status }}</td>                
                <td>
                    <a href="{{ route('clsss.show', ['clss' => $clss]) }}" class="btn btn-primary"><spna class="glyphicon glyphicon-eye-open"></spna></a>
                    <a href="{{ route('clsss.edit', ['clss' => $clss]) }}" class="btn btn-warning"><spna class="glyphicon glyphicon-edit"></spna></a>
                    {!! Form::open(['method'=>'DELETE', 'route'=>['clsss.destroy', $clss], 'style'=>'display:inline']) !!}                                        
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
