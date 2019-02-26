@extends('admin.layouts.baselayout')
@section('title','Class Index')

@section('header')
	@include('admin.layouts.navbar')
@endsection

@section('body-content-sidebar')
    @include('admin.layouts.sidebar')

@endsection

@section('body-content-content')
    {{--  {{ Breadcrumbs::render('clsss') }}  --}}

    <h1>Misc. table-options > Index Page</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Table</th>
                <th>Field</th>
                <th>Particular</th>
                <th>Status</th>
                <th>Remarks</th> 
                <th>Session</th>                                
                <th>
                    Action
                    <a href="{{ route('miscoptiontables.create') }}" class="btn btn-success pull-right"><spna class="glyphicon glyphicon-plus"></spna></a>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($tabledatas as $key => $tabledata)
                <strong>{{ $key }}: </strong>
                @foreach($tabledata as $column)
                    {{ $column }},
                @endforeach
                <br>
            @endforeach
            {{--  @foreach($clsss as $clss)
            <tr>
                <td>{{ $clss->id }}</td>
                <td>{{ $clss->name }}</td>
                <td>{{ $clss->next_clss_id }}</td>
                <td>{{ $clss->status }}</td>  
                <td>{{ $clss->session->name }}</td>
                <td>
                    <a href="{{ route('clsss.show', ['clss' => $clss]) }}" class="btn btn-primary"><spna class="glyphicon glyphicon-eye-open"></spna></a>
                    <a href="{{ route('clsss.edit', ['clss' => $clss]) }}" class="btn btn-warning"><spna class="glyphicon glyphicon-edit"></spna></a>
                    {!! Form::open(['method'=>'DELETE', 'route'=>['clsss.destroy', $clss], 'style'=>'display:inline']) !!}                                        
                        {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}                    
                    {{ Form::close() }}
                </td>
            </tr>
            @endforeach  --}}
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
