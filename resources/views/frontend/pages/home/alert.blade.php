	@extends('frontend.creaters.landing.landing')
	@section('pageTitle','Alert')
	@section('content')
	<link rel="stylesheet" href="{{ url('frontend/css/custom_multiselect.css')}}" type="text/css" />
			 <div class="container innercontainer">
				<div class="row">
				   <div class="col leftsidebarsec profileftsidebar">
					  <div class="sidebar_cont profilesidebar">
						 <div class="userinfo">
							<div class="userimage">
							@if(auth::user()->profile_photo==NULL)
							   <img class="updated_profile_pic" src="{{asset('frontend/images/default_user.jpg')}}" />
							@else
								
							@php
								$photo =  profile_photo(auth::user()->id);
							@endphp
								<img class="updated_profile_pic" src="{{timthumb($photo,80,80)}}">
							@endif
						</div>
							<h4>{{ $user->first_name }} {{ $user->last_name }}</h4>
							<a href="tel:{{ $user->mobile_number }}">{{ $user->mobile_number }}</a>
							<a href="mailto:{{ $user->email }}">{{ $user->email }}</a>
						 </div>
						 <ul class="accordion profilelist" id="accordion">
							<li class="nav-link dropdown-toggle couponlink">
							   <a href="{{url('profile')}}">
								  <div class="link">
									 <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22">
										<defs>
										   <style>.a{fill:none;}</style>
										</defs>
										<path class="a" d="M0,0H22V22H0Z"/>
										<path d="M18,20H16.25V18.19a2.671,2.671,0,0,0-2.625-2.714H8.375A2.671,2.671,0,0,0,5.75,18.19V20H4V18.19a4.451,4.451,0,0,1,4.375-4.524h5.25A4.451,4.451,0,0,1,18,18.19Zm-7-8.143A5.342,5.342,0,0,1,5.75,6.429,5.342,5.342,0,0,1,11,1a5.342,5.342,0,0,1,5.25,5.429A5.342,5.342,0,0,1,11,11.857Zm0-1.81a3.561,3.561,0,0,0,3.5-3.619A3.561,3.561,0,0,0,11,2.81,3.561,3.561,0,0,0,7.5,6.429,3.561,3.561,0,0,0,11,10.048Z"/>
									 </svg>
									 Profile
								  </div>
							   </a>
							</li>
							<li class="nav-link dropdown-toggle menukartlink">
							   <a href="{{url('my-coupon')}}">
								  <div class="link">
									 <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22">
										<defs>
										   <style>.a{fill:none;}.b{fill:#0f0f0f;}</style>
										</defs>
										<path class="a" d="M0,0H22V22H0Z"/>
										<path class="b" d="M2,8.778V3.889A.894.894,0,0,1,2.9,3H19.1a.894.894,0,0,1,.9.889V8.778a2.222,2.222,0,1,0,0,4.444v4.889a.894.894,0,0,1-.9.889H2.9a.894.894,0,0,1-.9-.889V13.222A2.222,2.222,0,1,0,2,8.778ZM3.8,7.416a3.978,3.978,0,0,1,0,7.168v2.638H18.2V14.584a3.978,3.978,0,0,1,0-7.168V4.778H3.8Zm4.5.917h5.4v1.778H8.3Zm0,3.556h5.4v1.778H8.3Z" transform="translate(0)"/>
									 </svg>
									 My Coupon
								  </div>
							   </a>
							</li>
							<li class="nav-link dropdown-toggle alertlink active">
							   <a href="{{url('alerts')}}">
								  <div class="link">
									 <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22">
										<defs>
										   <style>.a{fill:none;}</style>
										</defs>
										<path class="a" d="M0,0H22V22H0Z"/>
										<path d="M18.2,15.571H20v1.81H2v-1.81H3.8V9.238a7.2,7.2,0,1,1,14.4,0Zm-1.8,0V9.238a5.4,5.4,0,1,0-10.8,0v6.333ZM8.3,19.19h5.4V21H8.3Z" transform="translate(0)"/>
									 </svg>
									 Alerts
								  </div>
							   </a>
							</li>
							<li class="nav-link dropdown-toggle afiliatelink">
							   <a href="{{url('affiliate')}}">
								  <div class="link">
									 <svg xmlns="http://www.w3.org/2000/svg" width="22.3" height="22.3" viewBox="0 0 22.3 22.3">
										<defs>
										   <style>.afiliatelink .a{stroke:#000;}</style>
										</defs>
										<g transform="translate(0.15 0.15)">
										   <path class="a" d="M20.066,9.066a1.937,1.937,0,0,0-1.823,1.289H16.765A5.774,5.774,0,0,0,15.53,7.381l1.017-1.017a1.932,1.932,0,1,0-.912-.911L14.619,6.47a5.774,5.774,0,0,0-2.974-1.235V3.756a1.934,1.934,0,1,0-1.289,0V5.235A5.774,5.774,0,0,0,7.381,6.47L6.365,5.453a1.935,1.935,0,1,0-.912.911L6.47,7.381a5.774,5.774,0,0,0-1.235,2.974H3.756a1.934,1.934,0,1,0,0,1.289H5.235A5.774,5.774,0,0,0,6.47,14.619L5.453,15.636a1.932,1.932,0,1,0,.912.911L7.381,15.53a5.774,5.774,0,0,0,2.974,1.235v1.479a1.934,1.934,0,1,0,1.289,0V16.765a5.773,5.773,0,0,0,2.974-1.235l1.016,1.016a1.935,1.935,0,1,0,.912-.911L15.53,14.619a5.773,5.773,0,0,0,1.235-2.974h1.479a1.933,1.933,0,1,0,1.823-2.578Zm-3.142-4.9a.645.645,0,1,1,0,.911A.645.645,0,0,1,16.925,4.164Zm-11.85.911a.645.645,0,1,1,0-.911A.645.645,0,0,1,5.075,5.075ZM1.934,11.645A.645.645,0,1,1,2.578,11,.645.645,0,0,1,1.934,11.645Zm3.142,6.192a.645.645,0,1,1,0-.911A.645.645,0,0,1,5.075,17.836Zm11.85-.911a.645.645,0,1,1,0,.911A.645.645,0,0,1,16.925,16.925ZM11,1.289a.645.645,0,1,1-.645.645A.645.645,0,0,1,11,1.289Zm0,19.422a.645.645,0,1,1,.645-.645A.645.645,0,0,1,11,20.711Zm0-5.2a4.49,4.49,0,0,1-2.791-.969,3.224,3.224,0,0,1,5.581,0A4.489,4.489,0,0,1,11,15.512ZM9.711,10.355A1.289,1.289,0,1,1,11,11.645,1.291,1.291,0,0,1,9.711,10.355ZM14.7,13.575a4.484,4.484,0,0,0-1.781-1.5,2.578,2.578,0,1,0-3.844,0,4.484,4.484,0,0,0-1.78,1.5,4.512,4.512,0,1,1,7.406,0Zm5.364-1.93A.645.645,0,1,1,20.711,11,.645.645,0,0,1,20.066,11.645Z"/>
										</g>
									 </svg>
									 Afiliate
								  </div>
							   </a>
							</li>
							<li class="nav-link dropdown-toggle infolink">
							   <a href="{{('/subscription')}}">
								  <div class="link">
									 <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22">
										<defs>
										   <style>.a{fill:none;}</style>
										</defs>
										<path class="a" d="M0,0H22V22H0Z"/>
										<path d="M5,20a.954.954,0,0,1-1-.9V2.9A.954.954,0,0,1,5,2H19a.954.954,0,0,1,1,.9V5.6H18V3.8H6V18.2H18V16.4h2v2.7a.954.954,0,0,1-1,.9Zm13-5.4V11.9H11V10.1h7V7.4L23,11Z" transform="translate(-2)"/>
									 </svg>
									 Become VIP
								  </div>
							   </a>
							</li>
							<li class="nav-link dropdown-toggle infolink">
							   <a href="{{('/logout')}}">
								  <div class="link">
									 <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22">
										<defs>
										   <style>.a{fill:none;}</style>
										</defs>
										<path class="a" d="M0,0H22V22H0Z"/>
										<path d="M5,20a.954.954,0,0,1-1-.9V2.9A.954.954,0,0,1,5,2H19a.954.954,0,0,1,1,.9V5.6H18V3.8H6V18.2H18V16.4h2v2.7a.954.954,0,0,1-1,.9Zm13-5.4V11.9H11V10.1h7V7.4L23,11Z" transform="translate(-2)"/>
									 </svg>
									 Logout
								  </div>
							   </a>
							</li>
						 </ul>
					  </div>
				   </div>
				   <div class="col rightcontentsec prflrightcontentsec">
				   <?php
						if(isset($setting->kitchens) && !empty($setting->kitchens)){
							$kitchens = explode(",",$setting->kitchens);
						}else{
							$kitchens = array();
						}
						
						if(isset($setting->store) && !empty($setting->store)){
							$sstore = explode(",",$setting->store);
						}else{
							$sstore = array();
						}
						
						if(isset($setting->coupon_type) && !empty($setting->coupon_type)){
							$coupon_type = explode(",",$setting->coupon_type);
						}else{
							$coupon_type = array();
						}
						// echo "<pre>";print_r($sstore);die("here");
					?>
				   <form action = "{{ route('user.savesetting') }}" method="post" enctype="multipart/form-data">
								 {{ csrf_field() }}
					  <section class="storesection innersection profilearea">
						 <h2>Alerts
							<button type="submit" class="btn text-uppercase addbtn alertbtn" id="alert_save" onclick="Submitalert(event);">Save Alert</button>
						</h2>
						 <div class="row">
							<div class="col-md-12">
							   <div class="alertsection">
								  <div class="alertblock">
									 <div class="select-data sortselect">
										<label>Select kitchens for which you want to receive an alert</label>
										<select name="kitchens[]" multiple id="kitchens" class="form-control">
										  <option value="1" <?php if(in_array("1", $kitchens)) echo "selected"; ?>>Fish</option>
										  <option value="2" <?php if(in_array("2", $kitchens)) echo "selected"; ?>>Burger</option>
										  <option value="3" <?php if(in_array("3", $kitchens)) echo "selected"; ?>>Pizza</option>
										  <option value="4" <?php if(in_array("4", $kitchens)) echo "selected"; ?>>Sushi</option>
										  <option value="5" <?php if(in_array("5", $kitchens)) echo "selected"; ?>>Chicken</option>
										  <option value="6" <?php if(in_array("6", $kitchens)) echo "selected"; ?>>Afghan</option>
										  <option value="7" <?php if(in_array("7", $kitchens)) echo "selected"; ?>>American</option>
										  <option value="8" <?php if(in_array("8", $kitchens)) echo "selected"; ?>>100% Halal</option>
										  <option value="9" <?php if(in_array("9", $kitchens)) echo "selected"; ?>>Argentinian</option>
										  <option value="10" <?php if(in_array("10", $kitchens)) echo "selected"; ?>>Sandwiches</option>
										  <option value="11" <?php if(in_array("11", $kitchens)) echo "selected"; ?>>Burgers</option>
										  <option value="12" <?php if(in_array("12", $kitchens)) echo "selected"; ?>>Chinese</option>
										  <option value="13" <?php if(in_array("13", $kitchens)) echo "selected"; ?>>Drinks</option>
										  <option value="14" <?php if(in_array("14", $kitchens)) echo "selected"; ?>>Doner</option>
										  <option value="15" <?php if(in_array("15", $kitchens)) echo "selected"; ?>>Egyptian</option>
										  <option value="16" <?php if(in_array("16", $kitchens)) echo "selected"; ?>>Falafel</option>
										  <option value="17" <?php if(in_array("17", $kitchens)) echo "selected"; ?>>French</option>
										  <option value="18" <?php if(in_array("18", $kitchens)) echo "selected"; ?>>Pasta</option>
										</select>
									 </div>
									 <!--<div class="categoryselect">
										<ul class="categoryselect_list">
										   <li><i class="fa fa-times"></i><img src="{{asset('frontend/images/kitchencategory1.png')}}" />
											  <span>Sushi</span>
										   </li>
										   <li><i class="fa fa-times"></i><img src="{{asset('frontend/images/kitchencategory2.png')}}" />
											  <span>Chicken</span>
										   </li>
										   <li><i class="fa fa-times"></i><img src="{{asset('frontend/images/kitchencategory3.png')}}" />
											  <span>Mexican</span>
										   </li>
										   <li><i class="fa fa-times"></i><img src="{{asset('frontend/images/kitchencategory4.png')}}" />
											  <span>Burger</span>
										   </li>
										</ul>
									 </div>-->
								  </div>
							   </div>
							</div>
							<div class="col-md-12">
							   <div class="alertsection">
								  <div class="alertblock">
									 <div class="select-data sortselect">
											<label>Select the restaurants for which you want to receive an alert</label>
											<select class="form-control" name="store[]" multiple id="multiple_store" >
											   @foreach ($store as $store_val)
													<option value="{{ $store_val->id }}" <?php if(in_array($store_val->id, $sstore)) echo "selected"; ?>>{{ $store_val->restaurant_name }}</option>
												@endforeach
											</select>
									 </div>
									 <div class="categoryselect">
										<ul class="categoryselect_list restaurants">
											@foreach ($sstore as $val)
											@php
											$store_data = user_data_by_id($val);
											$profile_photo =  profile_photo($val);
											@endphp
												<li><img src="{{$profile_photo}}" />
													<span>{{ $store_data->restaurant_name }}</span>
												</li>
											@endforeach
										</ul>
									 </div>
									</div>
									
							   </div>
							   </div>
									 
									 <div class="col-md-12">
									 <div class="alertsection">
									 <div class="alertblock">
									 <div class="select-data sortselect">
											<label>Select the coupon type for which you want to receive an alert</label>
											<select class="form-control" name="coupon_type[]" multiple id="coupon_type">
											   <option value="1" <?php if(in_array("1", $coupon_type)) echo "selected"; ?>>Pre Order</option>
											   <option value="2" <?php if(in_array("2", $coupon_type)) echo "selected"; ?>>Ontbijt & Lunch</option>
											   <option value="3" <?php if(in_array("3", $coupon_type)) echo "selected"; ?>>Dinner</option>
											   <option value="4" <?php if(in_array("4", $coupon_type)) echo "selected"; ?>>Late Night Snack</option>
											   <option value="5" <?php if(in_array("5", $coupon_type)) echo "selected"; ?>>Special Deals</option>
											</select>
									 </div>
									 <div class="categoryselect">
										<ul class="categoryselect_list">
											@if(in_array("1", $coupon_type)) 
												<li><img src="{{asset('frontend/images/cpncategory1.svg')}}" />
													<span>Pre-order</span>
												</li>
											@endif
										   @if(in_array("2", $coupon_type))
										   <li><img src="{{asset('frontend/images/cpncategory2.png')}}" />
											  <span>Ontbijt/Lunch</span>
										   </li>
										   @endif
										   @if(in_array("3", $coupon_type))
										   <li><img src="{{asset('frontend/images/cpncategory3.png')}}" />
											  <span>Dinner</span>
										   </li>
										   @endif
										   @if(in_array("4", $coupon_type))
										   <li><img src="{{asset('frontend/images/cpncategory4.png')}}" />
											  <span>Late night</span>
										   </li>
										   @endif
										   @if(in_array("5", $coupon_type))
										   <li><img src="{{asset('frontend/images/cpncategory5.png')}}" />
											  <span>Specials</span>
										   </li>
										   @endif
										</ul>
									 </div>
									 </div>
									 </div>
									 
								  </div>
								  <div class="col-md-12">
								  <div class="alertsection">
								  <div class="alertblock">
									 <div class="select-data sortselect">
										<label>How do you want to receive your food alerts?</label>
									 </div>
									 <div class="foodalert_btns">
									 @if(isset($setting->alert_type))
										<input type = "hidden" name="alert_type" id="alert_type_sel" value = "{{ $setting->alert_type }}"/>
									 @else
										<input type = "hidden" name="alert_type" id="alert_type_sel" value = "1"/>
									 @endif
									 
										<a href="javascript:void(0)" class = "alert_type active" data-id="1">My Account</a>
										<a href="javascript:void(0)" id="alert_id" class = "alert_type <?php if(isset($setting->alert_type) && $setting->alert_type == "1,2") echo "active"; ?>" data-id="2">E-mail</a>
									 </div>
								  </div>
							   </div>
							   </div>
							</div>
						 </div>
					  </section>
					  
					  </form>
				   </div>
				</div>
			 </div>
		  <script src="{{ asset('js/multiselect.js')}}"></script>
		  <script src="{{ asset('frontend/js/custom.js')}}"></script>
<script type="text/javascript">
	$('#kitchens').multiselect({
		columns: 1,
		placeholder: 'Select kitchens',
		search: true,
		selectAll: true
	});
	
   $('#coupon_type').multiselect({
		columns: 1,
		placeholder: 'Select Coupon Type',
		search: true,
		selectAll: true
	});
	
	$('#multiple_store').multiselect({
		columns: 1,
		placeholder: 'Select Store',
		search: true,
		selectAll: true
	});
	jQuery(document).ready(function($) {
		$('ul.categoryselect_list.restaurants').slick({
			dots: false,
			infinite: true,
			speed: 500,
			slidesToShow: 4,
			slidesToScroll: 1,
			centerMode: true,
			centerPadding: '0px',
			autoplay: true,
			arrows: true,
			autoplaySpeed: 1500,
			responsive: [
			
			{
			breakpoint: 1199,
			settings: {
				arrows: true,
				centerMode: true,
				centerPadding: '0px',
				slidesToShow: 4
			}
			},
			{
			breakpoint: 991,
			settings: {
				arrows: true,
				centerMode: true,
				centerPadding: '0px',
				slidesToShow: 4
			}
			},
			
			{
			breakpoint: 480,
			settings: {
				arrows: true,
				centerMode: true,
				centerPadding: '0px',
				slidesToShow: 2
			}
			}
			]
		});
	});
</script>
		  
		  
	@endsection