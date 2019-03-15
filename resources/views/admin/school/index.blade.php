@extends('admin.layouts.baselayout')
@section('title','School Index')

@section('header')
	@include('admin.layouts.navbar')
@endsection

@section('body-content-sidebar')
    @include('admin.layouts.sidebar')

@endsection

@section('body-content-content')
    {{ Breadcrumbs::render('schools') }}
    
    <h1>School/Index Page</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>DISE Code</th>
                <th>Village</th>
                <th>Post</th>
                <th>PS</th>
                <th>Dist</th>
                <th>Pin</th>
                <th>
                    Action
                    <a href="{{ route('schools.create') }}" class="btn btn-success pull-right"><spna class="glyphicon glyphicon-plus"></spna></a>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($schools as $school)
            <tr>
                <td>{{ $school->id }}</td>
                <td>{{ $school->name }}</td>
                <td>{{ $school->dise }}</td>
                <td>{{ $school->vill }}</td>
                <td>{{ $school->post }}</td>
                <td>{{ $school->pstn }}</td>
                <td>{{ $school->dist }}</td>
                <td>{{ $school->pin }}</td>
                <td>
                    <a href="{{ route('schools.show',    ['school' => $school]) }}" class="btn btn-primary"><spna class="glyphicon glyphicon-eye-open"></spna></a>
                    <a href="{{ route('schools.edit',    ['school' => $school]) }}" class="btn btn-warning"><spna class="glyphicon glyphicon-edit"></spna></a>
                    {{--  <a href="{{ route('schools.destroy', ['school' => $school]) }}" data-method="delete"  class="btn btn-danger"><spna class="glyphicon glyphicon-trash"></spna></a>  --}}
                    {{--  {{ Form::open(array('url' => 'schools/' . $school->id, 'class' => 'pull-right')) }}  --}}
                    {{--  <form id="delete-school" action="{{route('schools.destroy')}}" method="POST" style="display:none">
                        @method('DELETE')
                        @csrf
                        <input type="hidden" name="school-id" value="{{$school->id}}">
                    </form>  --}}
                    
                    {!! Form::open(['method'=>'DELETE', 'route'=>['schools.destroy', $school], 'style'=>'display:inline']) !!}                    
                    {{--  {{ Form::hidden('_method', 'DELETE') }}  --}}
                        {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}                    
                    {{ Form::close() }}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <a class="btnPrint btn btn-primary" href='iframes/iframe2.html'>Print second page!</a>
    {{-- <button onclick="myFunction()">Try it</button> --}}


    <button class="button link-button" data-href="{{URL::to('sessions')}}">New Window</button>
    {{--  @php
        $now = new \DateTime('now');
        echo (int) $now->format('m');
    @endphp  --}}







<script type="text/javascript">
	$(document).ready(function(e){
		$(".btnPrint").printPage();


        $(".link-button").click(function () {
            // window.location.href = $(this).data('href');
            // myWindow = window.open($(this).data('href'),"_blank", "top=100,left=150,height=400,width=900,resizable=no,scrollbars=no,status=no");            
            
            myWindow = window.open($(this).data('href'),"_blank", "width=420,height=230,resizable=no,scrollbars=yes,status=no,scrollbars=0");
            myWindow.resizeTo(900, 300);                             // Resizes the new window
            myWindow.focus();
        });
       
	});

    //  function myFunction() {
    //         window.open("https://www.google.com","_blank", "top=100,left=150,height=400,width=900,resizable=no,scrollbars=no,status=no");
    //     }
  
</script>

@endsection

@section('footer')
	@include('admin.layouts.footer')
@endsection
