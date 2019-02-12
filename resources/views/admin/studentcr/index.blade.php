@extends('admin.layouts.baselayout')
@section('title','Session Index')

@section('header')
	@include('admin.layouts.navbar')
@endsection

@section('body-content-sidebar')
    @include('admin.layouts.sidebar')

@endsection

@section('body-content-content')
    <h1>Student CR > Index Page</h1>
    <hr>
    <h3>Newly Admitted Students</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Class</th>
                <th>Section</th>
                <th>Action</th>                
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @forelse($studentdbs as $studentdb)
            {!! Form::open(['method'=>'POST',   'route'=>['studentcrs.store'], 'class'=>'form-horizontal']) !!}
            <input type="hidden" name="stddbid" value="{{ $studentdb->id }}">
            <tr>
                <td>{{ $studentdb->id }}</td>
                <td>{{ $studentdb->name }}</td>
                <td>{{ $studentdb->clss->name }}</td>
                <td>
                    <select class="form-control" name="stdsection">
                    @foreach($clssections->where('clss_id', $studentdb->adm_clss_id) as $clssection)
                        <option value="{{ $clssection->section_id }}">{{ $clssection->section->name }}</option>
                    @endforeach
                    </select>
                </td><td>
                    {{--  <button class="btn btn-default">Save</button>  --}}
                    <button type="submit" class="btn btn-default">Save</button>
                </td>
                <td>{{ $studentdb->status }}</td>                
            </tr>
            {!! Form::close() !!}
            @empty 
                <tr><td colspan="6" class="text-center">No New Student Admitted!!! </td></tr>
            @endforelse
        </tbody>
    </table>

    <hr>
    <h3>Issue Roll Nos to Students of a Class-Students</h3>
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
                    {{--  <a href="{{ route('studentdbs.create') }}" class="btn btn-success pull-right">New Student Admission</a>  --}}
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse($studentcrs as $studentcr)
            {!! Form::open(['method'=>'POST',   'route'=>['admin.studentcr.issueRoll', $studentcr], 'class'=>'form-horizontal']) !!}
            <input type="hidden" name="stddbid" value="{{ $studentdb->id ?? '' }}">

            <tr>
                <td>{{ $studentcr->id }}</td>
                <td>{{ $studentcr->studentdb->name }}</td>
                <td>{{ $studentcr->clss->name }}</td>
                <td>{{ $studentcr->section->name }}</td>
                <td>
                    {{--  <button class="btn btn-default">Save</button>  --}}
                    <button type="submit" class="btn btn-default">Issue Roll</button>
                </td>
                <td></td>                
            </tr>
            {!! Form::close() !!}
            @empty 
                <tr><td colspan="6" class="text-center">No Students are waiting for New Roll Nos!!! </td></tr>
            @endforelse
        </tbody>
    </table>

    <hr>
    <h3>Class-Students wise Current Students Status</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Class</th>
                <th>Section</th>
                <th>Roll No</th>                
                <th>
                    Action                    
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse($studentcrsWithRoll as $studentcrWithRoll)
            <tr>
                <td>{{ $studentcrWithRoll->id }}</td>
                <td>{{ $studentcrWithRoll->studentdb->name }}</td>
                <td>{{ $studentcrWithRoll->clss->name }}</td>
                <td>{{ $studentcrWithRoll->section->name }}</td>
                <td>{{ $studentcrWithRoll->roll_no }}</td>
                <td>
                    <a href="{{ route('studentcrs.show',    ['studentcr' => $studentcrWithRoll]) }}" class="btn btn-primary"><spna class="glyphicon glyphicon-eye-open"></spna></a>
                    <a href="{{ route('studentcrs.edit',    ['studentcr' => $studentcrWithRoll]) }}" class="btn btn-warning"><spna class="glyphicon glyphicon-edit"></spna></a>
                    {{--  {!! Form::open(['method'=>'DELETE', 'route'=>['studentdbs.destroy', $studentdb], 'style'=>'display:inline']) !!}                                        
                        {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}                    
                    {{ Form::close() }}    --}}
                </td>                          
            </tr>   
            @empty 
                <tr><td colspan="6" class="text-center">No Current Student Available!!! </td></tr>         
            @endforelse
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
