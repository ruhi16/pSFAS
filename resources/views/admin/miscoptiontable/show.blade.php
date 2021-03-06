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
                    {{--  <a href="{{ route('miscoptiontables.create') }}" class="btn btn-success pull-right"><spna class="glyphicon glyphicon-plus"></spna></a>  --}}
                </th>
            </tr>
        </thead>
        <tbody>           
            {{--  @foreach($miscoptiontables as $miscoptiontable)  --}}
            <tr>
                <td>{{ $miscoptiontable->id }}</td>
                <td>{{ $miscoptiontable->table_name }}</td>
                <td>{{ $miscoptiontable->field_name }}</td>
                <td>{{ $miscoptiontable->option }}</td>  
                <td>{{ $miscoptiontable->status }}</td>
                <td>{{ $miscoptiontable->remarks }}</td>
                <td>{{ $miscoptiontable->session_id }}</td>
                <td>
                    <a href="{{ route('miscoptiontables.index') }}" class="btn btn-primary">Back</a>                    
                </td>
            </tr>
            {{--  @endforeach  --}}
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
