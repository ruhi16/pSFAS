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
    <h1>Fee-Collection > Find_Student_CR Page</h1>
    <div class="panel panel-default">
        <div class="panel panel-head">
            {!! Form::open(['method'=>'POST',   'route'=>['admin.feecollection.studentcr'], 'class'=>'form-horizontal']) !!}
                {{--  <input name="_method" type="hidden" value="GET">  --}}					
                <div class="form-group">
                    <label for="studentcr_id" class="col-sm-2 control-label">Student Id</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="studentcr_id">
                    </div>   
                    <div class="col-sm-2">
                        <button type="submit" class=" btn btn-primary">Save changes</button>                               
                    </div>
                </div>	
			{!! Form::close() !!}
        </div>

        <div class="panel panel-body">
            {{-- {{ dd($feeschedule) }} --}}
            <table class="table table-bordered">
                <tr>
                    <th class="pull-right">Name</th>    <td>{{ $studentcr->studentdb->name }}</td>
                    <th class="pull-right">Class</th>   <td>{{ $studentcr->clss->name }}</td>
                    <th class="pull-right">Section</th> <td>{{ $studentcr->section->name }}</td>
                    <th class="pull-right">Roll No</th> <td>{{ $studentcr->roll_no }}</td>
                </tr>
            </table>
<br><br>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Amount</th>
                        <th>Discount</th>
                        <th>Received</th>
                        <th>Month, Year</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody></tbody>
                    @forelse($feeschedule as $feesch)
                    <tr>
                        <td>{{ $feesch->id }}</td>
                        <td>{{ $feesch->name }}</td>
                        <td>{{ $feesch->total_fee }}</td>
                        <td></td>
                        <td></td>
                        <td>{{ $feesch->formonth_no }}, {{ $feesch->foryear_no}}</td>
                        <td>
                            @foreach($stdcrFeeCollection as $stdcrFeeColl)
                                {{ $stdcrFeeColl->feeschedule_id }}-{{$feesch->id}},

                                {{-- @if( $stdcrFeeColl->feeschedule_id == $feesch->id )
                                    Paid
                                @else
                                    Unpaid
                                @endif --}}
                            @endforeach
                            {{ $stdcrFeeCollection->contains($feesch->id) ? 'T' : 'F' }}
                        </td>
                    </tr>
                    @empty
                        adfa
                    @endforelse
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
