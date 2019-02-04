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
    <h1>Fee-Schedule > Index Page</h1>
    <div class="panel panel-default">
        <div class="panel-body">

            {!! Form::open(['method'=>'POST',   'route'=>['feeschedules.store'], 'class'=>'form-horizontal']) !!}

                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Fees Schedule Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Section Name">
                    </div>                    
                </div>	
                <div class="form-group">                   

                    <label for="name" class="col-sm-3 control-label">Fees Schedule At</label>
                    <div class="col-sm-9">
                        <div class="select2-wrapper">
                            <select class="form-control select2-multiple" multiple="multiple">
                                <option></option>
                                <option>January</option>                
                                <option>February</option>
                                <option>March</option>
                                <option>April</option>
                                <option>May</option>
                                <option>June</option>
                                <option>July</option>
                                <option>August</option>
                                <option>September</option>
                                <option>October</option>
                                <option>November</option>
                                <option>December</option>
                            </select>
                        </div>
                        {{-- <input type="text" class="form-control" name="name" id="name" placeholder="Section Name"> --}}
                    </div>                    
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">For Classes</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Section Name">
                    </div>                    
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Fees Structure</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Section Name">
                    </div>                    
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Fees Structure</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Section Name">
                    </div>                    
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Any Descriptions</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Section Name">
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
