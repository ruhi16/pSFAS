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
    <h1>Fee-Collection > Index Page</h1>
    <div class="panel panel-default">
        <div class="panel panel-head">
            {{--  <a class="btn btn-primary pull-right" href="{{ route('feecollections.create') }}">New Collection</a>  --}}
            <a class="btn btn-primary pull-right" href="{{ route('admin.feecollection.findStudentcr') }}">New Collection</a>
        </div>
        <div class="panel-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Student</th>
                        <th>FeeSchedule</th>
                        <th>Month-Year</th>
                        <th>Amount</th>
                        <th>Discount</th>
                        <th>Received</th>
                        <th>Due</th>
                        <th>User</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($feecollections as $feecollection)
                    <tr>
                        <td>{{ $feecollection->id }}</td>
                        <td>{{ $feecollection->studentcr->studentdb->name }}</td>
                        <td>{{ $feecollection->feeschedule->name }}</td>
                        <td>{{ $feecollection->formonth_no }}-{{ $feecollection->foryear_no }}</td>  
                        <td>{{ $feecollection->feeschedule->total_fee }}</td>
                        <td>{{ $feecollection->fee_discount }}</td>
                        <td>{{ $feecollection->fee_received }}</td>
                        <td>{{ $feecollection->fee_pending }}</td>
                        <td>{{ $feecollection->user_id }}</td>
                        <td>{{ $feecollection->status }}</td>
                        <td>
                            <a href="{{ route('feecollections.show', ['feecollection' => $feecollection]) }}" class="btn btn-primary"><spna class="glyphicon glyphicon-eye-open"></spna></a>
                            <a href="{{ route('feecollections.edit', ['feecollection' => $feecollection]) }}" class="btn btn-info"><spna class="glyphicon glyphicon-edit"></spna></a>
                            
                        </td>
                    </tr>
                @endforeach
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
