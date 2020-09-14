@extends('layouts.app')
@section('content')

			<div class="row h-100">
                <div class="col-12 col-md-8 col-lg-10 mx-auto my-auto">
                    <div class="card auth-card">
                        <div class="form-side">
                            
                            <span class="logo_image d-block mb-3"><a href="{{url('/')}}"><img src="{{asset('img/bigfoot.jpeg')}}"></a></span>
                            
                             
							@if(Session::has('message'))
							<div class="alert alert-success">
							{{ Session::get('message') }}
							@php
							Session::forget('message');
							@endphp
							</div>
							@endif
							@include('flash-message')	
                            <form method="POST" action="{{ route('register') }}" class="frm_class">
								{{ csrf_field() }}
							
								<!-- <h5 class="mb-4 register_title">Basic Info</h5>
								 -->
								<div id="first_part">
									<div class="form-row">
										<div class="col-md-6">
											<label class="has-float-label form-group mb-3 ">
												<input name="first_name" id="first_name"  type="text" value="{{ old('first_name')}}" class="form-control">
												<span>{{ trans('global.first_name') }}<span style="color:red;">*</span></span>
												<div class="error_margin"><span class="error first_name_error" >  {{ $errors->first('first_name')  }} </span></div>
											</label>
										</div>
										
										<div class="col-md-6">
											<label class="has-float-label form-group mb-3 ">
												<input name="last_name" id="last_name"  type="text" value="{{ old('last_name')}}" class="form-control">
												<span>{{ trans('global.last_name') }}<span style="color:red;">*</span></span>
												<div class="error_margin"><span class="error last_name_error" >  {{ $errors->first('last_name')  }} </span></div>
											</label>
										</div>
									</div>
									<!-- <div class="form-row">
										<div class="col-md-6">
											<label class="has-float-label form-group mb-3">
												<input name="mobile_number" id="mobile_number"  type="text" value="{{ old('mobile_number')}}" class="form-control">
												<span>Mobile <span style="color:red;">*</span></span>
												<div class="error_margin"><span class="error mobile_number_error" >  {{ $errors->first('mobile_number')  }} </span></div>
											</label>
										</div>
										<div class="col-md-6">
											<label class="has-float-label form-group mb-3">
												<input data-type="adhaar-number" name="aadhar_number" maxLength="14" minLength="14"  id="aadhar_number" type="text" value="{{ old('aadhar_number')}}" class="form-control">
												<span>Aadhaar<span style="color:red;">*</span></span>
												<div class="error_margin"><span class="error aadhar_number_error" >  {{ $errors->first('aadhar_number')  }} </span></div>
											</label>
										</div>
										
									</div> -->
									
									<div class="form-row">
										<div class="col-md-6">
											<label class="has-float-label form-group mb-3">
												<input name="login_password" id="login_password" type="password" value="{{ old('login_password')}}" class="form-control">
												<span>{{ trans('global.login_password') }}<span style="color:red;">*</span></span>
												<div class="error_margin"><span class="error login_password_error" >  {{ $errors->first('login_password')  }} </span></div>
											</label>
										</div>
									
										<div class="col-md-6">
											<label class="has-float-label form-group mb-3">
												<input name="login_password_confirmation" id="login_password_confirmation" type="password" value="{{ old('login_password_confirmation')}}" class="form-control">
												<span>{{ trans('global.login_password_confirmation') }}<span style="color:red;">*</span></span>
												<div class="error_margin"><span class="error login_password_confirmation_error" >  {{ $errors->first('login_password_confirmation')  }} </span></div>
											</label>
										</div>
									</div>
								
									<div class="form-row">	
										<div class="col-md-6">
											<label class="has-float-label form-group mb-3">
												<input name="email" id="email" type="text" value="{{ old('email')}}" class="form-control">
												<span>{{ trans('global.E-mail') }}<span style="color:red;">*</span></span>
												
												<div class="error_margin"><span class="error email_error" >  {{ $errors->first('email')  }} </span></div>
											</label>
										</div>
										<div class="col-md-6">
											<label class="has-float-label form-group mb-3">
												<select name="gender" id="gender" class="form-control">
													<option value="">Select Gender</option>
													<option value="male" @if (old('gender') == "male") {{ 'selected' }} @endif >Male</option>
													<option value="female" @if (old('gender') == "female") {{ 'selected' }} @endif >Female</option>
												</select>
												<span>{{ trans('global.gender') }}<span style="color:red;">*</span></span>
												<div class="error_margin"><span class="error gender_error" >  {{ $errors->first('gender')  }} </span></div>
											</label>
										</div>
									</div>
									<!-- <div class="form-row">
										<div class="col-md-6">
											<label class="has-float-label form-group mb-3">
												<select name="qualifications" id="qualifications" class="form-control">
													<option value="">Select Qualification</option>
													<option value="under_matric" @if (old('qualifications') == "under_matric") {{ 'selected' }} @endif >Under Matric</option>
													<option value="matric" @if (old('qualifications') == "matric") {{ 'selected' }} @endif >Matric</option>
													<option value="graduate" @if (old('qualifications') == "graduate") {{ 'selected' }} @endif >Graduate</option>
													<option value="postgraduate" @if (old('qualifications') == "postgraduate") {{ 'selected' }} @endif >Postgraduate</option>
												</select>
												<span>{{ trans('global.qualifications') }}<span style="color:red;">*</span></span>
												<div class="error_margin"><span class="error qualifications_error" >  {{ $errors->first('qualifications')  }} </span></div>
											</label>
										</div>
										<div class="col-md-6">
											<label class="has-float-label form-group mb-3">
												<select name="income" id="income" class="form-control">
													<option value="">Select Income</option>
													<option value="0_to_2.5" @if (old('income') == "0_to_25") {{ 'selected' }} @endif >0 to 2.5 lacs</option>
													<option value="25_to_5" @if (old('income') == "25_to_5") {{ 'selected' }} @endif >2.5 lacs to 5 lacs</option>
													<option value="5_to_10" @if (old('income') == "5_to_10") {{ 'selected' }} @endif >5 lacs to 10 lacs</option>
													<option value="above_10lacs" @if (old('income') == "above_10lacs") {{ 'selected' }} @endif >Above 10 lacs</option>
												</select>
												<span>{{ trans('global.income') }}<span style="color:red;">*</span></span>
												<div class="error_margin"><span class="error income_error" >  {{ $errors->first('income')  }} </span></div>
											</label>
										</div>
									</div> -->
									
									<div class="form-row">
										<div class="col-md-6 ">
												
											 <div class="form-group mb-4">
												
												<label class="has-float-label mb-3">
												
													<input type="text" id="date_of_birth" name="date_of_birth" {{old('date_of_birth')}} autocomplete="off" class="form-control datepicker" placeholder="">
													<span>{{trans('global.date_of_birth')}}<em>(DD-MM-YYYY)</em><span style="color:red;">*</span></span>
													
													<div class="error_margin"><span class="error date_of_birth_error" >  {{ $errors->first('date_of_birth')  }} </span></div>
												</label>
												
											</div>
											
										</div>
									
										<div class="col-md-6">
											<label class="has-float-label form-group mb-3 ">
												<input name="age" id="age" readonly="readonly"  type="text" value="{{ old('age')}}" class="form-control">
												<span>{{ trans('global.age') }}<span style="color:red;">*</span></span>
											</label>
										</div>
										
									</div>	
								
									<div class="form-row">
										<div class="col-md-12">
											<label class="has-float-label form-group mb-3">
												<textarea name="address" id="address" class="form-control">{{ old('address')}}</textarea>
												<span>Address <span style="color:red;">*</span></span>
												<div class="error_margin"><span class="error address_error" >  {{ $errors->first('address')  }} </span></div>
											</label>
										</div>
											
									</div>	
										
									<div class="form-row">
										<div class="col-md-12 ">
											<label id="htmldata"></label>
											<label id="age_and_price"></label>
											<div class="has-float-label form-group mb-0">
												<input name="terms_and_condtions" id="terms_and_condtions" type="checkbox" value="1" class=""><span style="margin-left:10px;margin-top:5px;">Agrees to <a href="javascript:void(0)">Terms & Conditions</a></span>

												<div class="error_margin"><span class="error terms_and_condtions_error" >  {{ $errors->first('terms_and_condtions')  }} </span></div>
											</div> 
										</div>
									</div>
								
									
									 <div class="d-flex justify-content-between align-items-center">
										<a href="{{ route('login') }}">{{ trans('global.login') }}</a>
										<input type="submit" class="btn btn-primary btn-lg btn-shadow uppercase_button" id="buttonCheck" value="{{ trans('global.register') }}">
									</div>
								</div>
								
                            </form>
                        </div>
                    </div>
                </div>
            </div>


<style>
.datepicker-dropdown {
	-webkit-transform: translate(0);
	-ms-transform: translate(0);
	transform: translate(0);   
}
</style>

@section('strpieJs')
<script>

/* var date = document.getElementById('date_of_birth'); */

function checkValue(str, max) {
  if (str.charAt(0) !== '0' || str == '00') {
    var num = parseInt(str);
    if (isNaN(num) || num <= 0 || num > max) num = 1;
    str = num > parseInt(max.toString().charAt(0)) && num.toString().length == 1 ? '0' + num : num.toString();
  };
  return str;
};

$(document).ready(function(){
	
	$(".box").hide();

	var date_of_birth = $('#date_of_birth').val();
	if(date_of_birth != ''){
		getAgePriceCalculation();
	}
});

function getAgePriceCalculation(){
	var date_of_birth = $('#date_of_birth').val();
	var csrf_token = $('meta[name="csrf-token"]').attr('content');
	$.ajax({
		type: "POST",
		dataType: 'json',
		url: base_url+'/user/calculateAge',
		data: {_token:csrf_token,date_of_birth:date_of_birth},
		success: function(data) {
			if(data.success == true){
				if(data.age >= 12 && data.age <= 65){
					$('#age').val(data.age);
					
					$('#htmldata').html(data.htmldata);
					$('.date_of_birth_error').html('');
				}else{
					
					$('#age_and_price').html('<h3 class="failure">Your age must be greater than 12 and less than 65.</h3>').show();
				}
			}else{
				$('.date_of_birth_error').html("Invalid Date Entered.");
			}
			
		},
		error :function( data ) {}
	});
}
$('#date_of_birth').change(function(){
	getAgePriceCalculation();
});

function showDiv(prefix,chooser) 
{
	
	for(var i=1;i<=chooser;i++) 
	{
		var div = document.getElementById(prefix+i);
		div.style.display = 'none';
	}

	var selectedOption = chooser;

	if(selectedOption == "1")
	{
		displayDiv(prefix,"1");
		hideDiv(prefix,"2");
		hideDiv(prefix,"3");
		hideDiv(prefix,"4");
		
	}
	if(selectedOption == "2")
	{
		displayDiv(prefix,"1");
		displayDiv(prefix,"2");
		hideDiv(prefix,"3");
		hideDiv(prefix,"4");
		
	}
	if(selectedOption == "3")
	{
		displayDiv(prefix,"1");
		displayDiv(prefix,"2");
		displayDiv(prefix,"3");
		hideDiv(prefix,"4");
	}
	if(selectedOption == "4")
	{
		displayDiv(prefix,"1");
		displayDiv(prefix,"2");
		displayDiv(prefix,"3");
		displayDiv(prefix,"4");
	}
}

function displayDiv(prefix,suffix) 
{
	var div = document.getElementById(prefix+suffix);
	div.style.display = 'block';
}
 function hideDiv(prefix,suffix) 
{
	var div = document.getElementById(prefix+suffix);
	div.style.display = 'none';
}

</script>
@stop
@endsection