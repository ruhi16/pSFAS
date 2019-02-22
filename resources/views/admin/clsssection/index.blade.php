@extends('admin.layouts.baselayout')
@section('title','Session Index')

@section('header')
	@include('admin.layouts.navbar')
@endsection

@section('body-content-sidebar')
    @include('admin.layouts.sidebar')

@endsection

@section('body-content-content')
    <h1>Class-Section > Index Page</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Class Name</th>                
                <th>Active Sections</th> 
                <th>Session</th>               
                <th>
                    Action
                    {{-- <a href="{{ route('sections.index') }}" class="btn btn-success pull-right"><spna class="glyphicon glyphicon-pencil"></spna></a> --}}
                    
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($clsss as $clss)
                <tr>
                    <td>{{ $clss->id }}</td>
                    <td>{{ $clss->name }}</td>
                    <td>
                        @foreach( $clsssections->where('clss_id', $clss->id)->sortBy('section_id') as $clsssection )
                            {{ $clsssection->section->name }},
                        @endforeach
                    </td>
                    <td>{{ $clss->session->name }}</td>
                    <td>
                        <a href="{{ route('admin.addClsssections',    ['clss' => $clss]) }}" class="btn btn-primary"><spna class="glyphicon glyphicon-plus"></spna></a>
                        <a href="{{ route('admin.delClsssections',    ['clss' => $clss]) }}" class="btn btn-danger"><spna class="glyphicon glyphicon-minus"></spna></a>
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
