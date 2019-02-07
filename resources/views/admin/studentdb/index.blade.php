@extends('admin.layouts.baselayout')
@section('title','Session Index')

@section('header')
	@include('admin.layouts.navbar')
@endsection

@section('body-content-sidebar')
    @include('admin.layouts.sidebar')

@endsection

@section('body-content-content')
    <h1>Student DB > Index Page</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Class</th>
                <th>Section</th>
                <th>Status</th>                
                <th>
                    Action
                    <a href="{{ route('studentdbs.create') }}" class="btn btn-success pull-right">New Student Admission</a>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($studentdbs as $studentdb)
            <tr>
                <td>{{ $studentdb->name }}</td>
                <td>{{ $studentdb->fname }}</td>
                <td>{{ $studentdb->adm_clss_id }}</td>
                <td>Section</td>
                <td>{{ $studentdb->status }}</td>
                <td>
                    <a href="{{ route('studentdbs.show',    ['studentdb' => $studentdb]) }}" class="btn btn-primary"><spna class="glyphicon glyphicon-eye-open"></spna></a>
                    <a href="{{ route('studentdbs.edit',    ['studentdb' => $studentdb]) }}" class="btn btn-warning"><spna class="glyphicon glyphicon-edit"></spna></a>
                    {{--  {!! Form::open(['method'=>'DELETE', 'route'=>['studentdbs.destroy', $studentdb], 'style'=>'display:inline']) !!}                                        
                        {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}                    
                    {{ Form::close() }}  --}}
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
