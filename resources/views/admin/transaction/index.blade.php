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
    <h1>Transaction > Index Page</h1>

    @if( $errors->any() ) 		
		@foreach($errors->all() as $error)
			<div class="alert alert-danger">
                <strong>Danger!</strong> {{ $error }}
            </div>
		@endforeach		
	@endif
    <table class="table table-bordered table-hover table-striped table-condensed">
        <thead>
            <tr>
                <th>ID</th>
                <th>Particulars</th>
                <th>Account Type</th>
                <th>Amountin Rs.</th>
                <th>Status</th> 
                <th>Session</th>
                <th>User</th>
                <th>Date & Time</th>             
                <th>
                    Action
                    <a href="{{ route('transactions.create') }}" class="btn btn-xs btn-success pull-right"><spna class="glyphicon glyphicon-plus"></spna></a>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($transactions as $transaction)
            <tr class="{{ $transaction->accounttype == 'Income' ? 'success' : 'danger' }}">
                <td>{{ $transaction->id }}</td>
                <td>{{ $transaction->accountparticular_id }}</td>
                <td>{{ $transaction->accounttype }}</td>
                <td align="right">{{ $transaction->amount }}</td>
                <td>{{ $transaction->status }}</td>
                <td>{{ $transaction->session_id }}</td>
                <td>{{ $transaction->user_id }}</td>
                <td>{{ $transaction->created_at }}</td>
                  
                <td>
                    <a href="{{ route('transactions.show', ['transaction' => $transaction]) }}" class="btn btn-xs btn-primary"><spna class="glyphicon glyphicon-eye-open"></spna></a>
                    <a href="{{ route('transactions.edit', ['transaction' => $transaction]) }}" class="btn btn-xs btn-warning"><spna class="glyphicon glyphicon-edit"></spna></a>
                    {!! Form::open(['method'=>'DELETE', 'route'=>['transactions.destroy', $transaction], 'style'=>'display:inline']) !!}                                        
                        {{ Form::submit('Delete', array('class' => 'btn btn-xs btn-danger')) }}                    
                    {{ Form::close() }}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {!! $transactions->links() !!}

<script type="text/javascript">
	$(document).ready(function(e){
		
	});  
</script>

@endsection

@section('footer')
	@include('admin.layouts.footer')
@endsection
