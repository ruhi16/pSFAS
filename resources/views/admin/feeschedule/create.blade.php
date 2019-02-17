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
    <h1>Fee-Schedule > Create Page</h1>
    <div class="panel panel-default">
        <div class="panel-body">

            {!! Form::open(['method'=>'POST',   'route'=>['feeschedules.store'], 'class'=>'form-horizontal']) !!}
            {{-- <input name="_method" type="hidden" value="POST"> 					 --}}
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Fees Schedule Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Section Name">
                    </div>                    
                </div>	
                <div class="form-group">
                    <label for="clsss" class="col-sm-3 control-label">For Class(es)</label>
                    <div class="col-sm-9">
                        {{-- <input type="text" class="form-control" name="name" id="name" placeholder="Section Name"> --}}
                        <select name="clsss[]" class="form-control select2-multiple" multiple="multiple">
                            <option value=""></option>
                            @foreach($clsss as $clss)
                                <option value="{{ $clss->id }}">{{ $clss->name }}</option>
                            @endforeach
                        </select>
                    </div>                    
                </div>
                <div class="form-group"> 
                    <label for="months" class="col-sm-3 control-label">Fees Schedule At</label>
                    <div class="col-sm-9">
                        <div class="select2-wrapper">
                            <select name="months[]" class="form-control select2-multiple" multiple="multiple">
                                <option value=""></option>
                                <option value="January">January</option>                
                                <option value="February">February</option>
                                <option value="March">March</option>
                                <option value="April">April</option>
                                <option value="May">May</option>
                                <option value="June">June</option>
                                <option value="July">July</option>
                                <option value="August">August</option>
                                <option value="September">September</option>
                                <option value="October">October</option>
                                <option value="November">November</option>
                                <option value="December">December</option>
                            </select>
                        </div>
                        {{-- <input type="text" class="form-control" name="name" id="name" placeholder="Section Name"> --}}
                    </div>                    
                </div>
                
                <div class="form-group">
                    <label for="years" class="col-sm-3 control-label">For Year</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="years" id="years" placeholder="Enter Current Year">
                    </div>                    
                </div>
                <div class="form-group">
                    <label for="total" class="col-sm-3 control-label">Total Amount</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="total" id="total" placeholder="Total Calculated Amount">
                    </div>                    
                </div>
                <div class="form-group">
                    <label for="disc" class="col-sm-3 control-label">Discount(if any)</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="disc" id="disc" placeholder="any discount in percentage %" value="0">
                    </div>                    
                </div>
                <div class="form-group">
                    <label for="fees" class="col-sm-3 control-label">Fees Structure</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="fees" id="fees" placeholder="Detail Fees Structure">
                    </div>                    
                </div>
                <div class="form-group">
                    <label for="remarks" class="col-sm-3 control-label">Remarks(if any)</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="remarks" id="remarks" placeholder="any remarks want to submit">
                    </div>                    
                </div>



                <button type="reset" class="col-sm-offset-2 btn btn-default">Reset</button>
                <button type="submit" class=" btn btn-primary">Save changes</button>              


                {!! Form::close() !!}
            </div>
        </div>


        

        {{-- <div class="select2-wrapper">
			<select class="form-control select2-multiple" multiple="multiple">
				<option></option>
				<optgroup label="Alaskan/Hawaiian Time Zone">
                    <option value="AK">Alaska</option>
                    <option value="HI" disabled="disabled">Hawaii</option>
                </optgroup>
                <optgroup label="Pacific Time Zone">
                    <option value="CA">California</option>
                    <option value="NV">Nevada</option>
                    <option value="OR">Oregon</option>
                    <option value="WA">Washington</option>
                </optgroup>
                <optgroup label="Mountain Time Zone">
                    <option value="AZ">Arizona</option>
                    <option value="CO">Colorado</option>
                    <option value="ID">Idaho</option>
                    <option value="MT">Montana</option><option value="NE">Nebraska</option>
                    <option value="NM">New Mexico</option>
                    <option value="ND">North Dakota</option>
                    <option value="UT">Utah</option>
                    <option value="WY">Wyoming</option>
                </optgroup>
                <optgroup label="Central Time Zone">
                    <option value="AL">Alabama</option>
                    <option value="AR">Arkansas</option>
                    <option value="IL">Illinois</option>
                    <option value="IA">Iowa</option>
                    <option value="KS">Kansas</option>
                    <option value="KY">Kentucky</option>
                    <option value="LA">Louisiana</option>
                    <option value="MN">Minnesota</option>
                    <option value="MS">Mississippi</option>
                    <option value="MO">Missouri</option>
                    <option value="OK">Oklahoma</option>
                    <option value="SD">South Dakota</option>
                    <option value="TX">Texas</option>
                    <option value="TN">Tennessee</option>
                    <option value="WI">Wisconsin</option>
                </optgroup>
                <optgroup label="Eastern Time Zone">
                    <option value="CT">Connecticut</option>
                    <option value="DE">Delaware</option>
                    <option value="FL">Florida</option>
                    <option value="GA">Georgia</option>
                    <option value="IN">Indiana</option>
                    <option value="ME">Maine</option>
                    <option value="MD">Maryland</option>
                    <option value="MA">Massachusetts</option>
                    <option value="MI">Michigan</option>
                    <option value="NH">New Hampshire</option><option value="NJ">New Jersey</option>
                    <option value="NY">New York</option>
                    <option value="NC">North Carolina</option>
                    <option value="OH">Ohio</option>
                    <option value="PA">Pennsylvania</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option>
                    <option value="VT">Vermont</option><option value="VA">Virginia</option>
                    <option value="WV">West Virginia</option>
                </optgroup>
                <option value="TNOGZ" disabled="disabled">The No Optgroup Zone</option>
                <option value="TPZ">The Panic Zone</option>
                <option value="TTZ">The Twilight Zone</option>

			</select>
		</div> --}}


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
