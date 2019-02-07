@extends('admin.layouts.baselayout')
@section('title','Session Index')


@section('header')
	@include('admin.layouts.navbar')
@endsection

@section('body-content-sidebar')
    @include('admin.layouts.sidebar')

@endsection

@section('body-content-content')
<link rel="stylesheet" href="{{ url('bs337/fastselect/fastselect.min.css') }}">
    <h1>Fee-Schedule > Show Page</h1>
    <div class="panel panel-default">
        <div class="panel panel-head">

        </div>
        <div class="panel-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Class</th>
                        <th>Sch Month</th>
                        <th>Sch Year</th>
                        <th>Total Fee</th>
                        <th>Fee Structure</th>
                        <th>Discount</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                {{--  @foreach($feeschedules as $feeschedule)  --}}
                    <tr>
                        <td>{{ $feeschedule->id }}</td>
                        <td>{{ $feeschedule->name }}</td>
                        <td>{{ $feeschedule->clss->name }}</td>
                        <td>{{ $feeschedule->formonth_no }}</td>
                        <td>{{ $feeschedule->foryear_no }}</td>
                        <td>{{ $feeschedule->total_fee }}</td>
                        <td>{{ $feeschedule->feestructure }}</td>
                        <td>{{ $feeschedule->total_fee_discount }}</td>
                        <td>{{ $feeschedule->status }}</td>
                        <td>
                            <a href="{{ route('feeschedules.index', ['feeschedule' => $feeschedule]) }}" class="btn btn-primary">Back</a>
                            {{--  <a href="{{ route('feeschedules.edit', ['feeschedule' => $feeschedule]) }}" class="btn btn-info"><spna class="glyphicon glyphicon-edit"></spna></a>  --}}
                            {{--  {!! Form::open(['method'=>'DELETE', 'route'=>['feeschedules.destroy', $feeschedule], 'style'=>'display:inline']) !!}                                        
                                {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}                    
                            {{ Form::close() }}  --}}
                        </td>
                    </tr>
                {{--  @endforeach  --}}
                </tbody>
            </table>
        </div>
    </div>


        

    <link rel="stylesheet" href="{{ url('bs337/select2/select2.min.css') }}">
    <link rel="stylesheet" href="{{ url('bs337/select2/select2-bootstrap.css') }}">
	<link rel="stylesheet" href="{{ url('bs337/select2/gh-pages.css') }}">

    <script src="{{ url('bs337/select2/select2jquery.min.js') }}"></script>
    <script src="{{ url('bs337/select2/select2.full.js') }}"></script>

    <script>
        $( ".select2-multiple" ).select2( {
            theme: "bootstrap",
            placeholder: "Select a State",
            maximumSelectionSize: 6,
            containerCssClass: ':all:'
        } );

        
    </script>


<script type="text/javascript">
	$(document).ready(function(e){
        $('.multipleSelect').fastselect();
	});  
</script>

@endsection

@section('footer')
	@include('admin.layouts.footer')
@endsection
