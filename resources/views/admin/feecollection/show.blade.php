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
    <h1>Fee-Collection > Show Page</h1>
    <div class="panel panel-default">
        <div class="panel panel-head">

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
                            <a href="{{ route('feecollections.index', ['feecollection' => $feecollection]) }}" class="btn btn-primary">Back</a>                            
                        </td>
                    </tr>
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
