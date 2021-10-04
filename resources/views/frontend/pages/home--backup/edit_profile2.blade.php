	@extends('frontend.creaters.landing.landing')
	@section('pageTitle','Edit Profile')
	@section('content')

	<link rel="stylesheet" href="{{ url('frontend/css/user.css')}}" type="text/css" />
	<!--<main class="site-content">-->
			 <div class="container-fluid innercontainer">
				<div class="row">
				   <div class="col leftsidebarsec dashboardsidebar mt-0">
					  <div class="sidebar_cont profilesidebar">
						 <ul class="accordion profilelist" id="accordion">
							<li class="nav-link dropdown-toggle couponlink">
							   <a href="{{url('booking')}}">
								  <div class="link">
									 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
										<defs></defs>
										<path class="a" d="M0,0H24V24H0Z"/>
										<path class="b" d="M19,21H5a1,1,0,0,1-1-1V11H1L11.327,1.612a1,1,0,0,1,1.346,0L23,11H20v9A1,1,0,0,1,19,21Zm-6-2h5V9.157L12,3.7,6,9.157V19h5V13h2Z"/>
									 </svg>
									 Booking
								  </div>
							   </a>
							</li>
							<li class="nav-link dropdown-toggle couponlink">
							   <a href="{{url('makecoupon')}}">
								  <div class="link">
									 <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22">
										<defs>
										   <style>.a{fill:none;}.b{fill:#0f0f0f;}</style>
										</defs>
										<path class="a" d="M0,0H22V22H0Z"/>
										<path class="b" d="M2,8.778V3.889A.894.894,0,0,1,2.9,3H19.1a.894.894,0,0,1,.9.889V8.778a2.222,2.222,0,1,0,0,4.444v4.889a.894.894,0,0,1-.9.889H2.9a.894.894,0,0,1-.9-.889V13.222A2.222,2.222,0,1,0,2,8.778ZM3.8,7.416a3.978,3.978,0,0,1,0,7.168v2.638H18.2V14.584a3.978,3.978,0,0,1,0-7.168V4.778H3.8Zm4.5.917h5.4v1.778H8.3Zm0,3.556h5.4v1.778H8.3Z" transform="translate(0)"/>
									 </svg>
									 Coupons
								  </div>
							   </a>
							</li>
							<li class="nav-link dropdown-toggle couponlink active">
							   <a href="{{url('store-profile')}}">
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
						 </ul>
					  </div>
				   </div>
				   <div class="col rightcontentsec dashboardcontsec">
					  <section class="storesection innersection profilearea storeprofilesec">
						 <h2>Edit Profile </h2>
						 <div class="row">
							<div class="col storeprofilecol">
							   <div class="profilerow pt-2">
								  <div class="profileinfo">
								 
									 <form class="editprofileform" action = "{{ route('user.storerestaurant') }}" method="post" enctype="multipart/form-data">
										{{ csrf_field() }}
										<div class="profilehdr">
										   <div class="profilelefthdr dashboardpfl_hdr editprofile_section">
											  <div class="userimage editimageblk">
												 <div class="uploadimage_blk">
													<div class="circle">
														@if(auth::user()->profile_photo==NULL)
														  <a href="javascript:void(0)" data-toggle="modal" data-target=".upload_photo_modal" class="show_image"  ><img class="profile-picture" src="{{asset('frontend/images/default_user.jpg')}}"></a>
														@else
														 
														 @php
															$photo =  profile_photo(auth::user()->id);
														 @endphp
														<!--<div class="image profile_photo">-->
															 <a href="javascript:void(0)" data-toggle="modal" data-target=".upload_photo_modal" class="show_image"  >
																<div id='profile-upload'>
																 <img class="profile_photo_change" src="{{timthumb($photo,80,80)}}">
																</div>
															 </a>	
														<!--</div>-->
														 
														@endif
													 <!--<a href="javascript:void(0)" data-toggle="modal" data-target=".upload_photo_modal" class="show_image"  >
														<img class="profile-picture" src="{{asset('frontend/images/profileimage.png')}}">
													 </a>-->
													</div>
													<div class="p-image">
													   <div class="upload-button upload-buttondiv">
														  <img src="{{asset('frontend/images/picture.svg')}}" />
													   </div>
													   <input class="file-upload" type="file" accept="image/*"/>
													</div>
												 </div>
											  </div>
											  <div class="infohdr editprofileinfo">
												 <h2>Basic Info</h2>
												 <div class="row">
													<div class="col-md-6 form-group">
													   <label>First Name</label>
													   <input type="text" name = "first_name" class="form-control" placeholder="" value="{{ $user->first_name }}" required>
													</div>
													<div class="col-md-6 form-group">
													   <label>Last Name</label>
													   <input type="text" name = "last_name" class="form-control" placeholder="" value="{{ $user->last_name }}" required>
													</div>
												 </div>
												 <div class="row">
													<div class="col-md-6 form-group">
													   <label>Phone Number</label>
													   <input type="text" name = "mobile_number" class="form-control" placeholder="" value="{{ $user->mobile_number }}" required>
													</div>
													<div class="col-md-6 form-group">
													   <label>Email</label>
													   <input type="email" name = "email" class="form-control" placeholder="johndoe@gmail.com" value="{{ $user->email }}" disabled>
													</div>
												 </div>
												 <div class="row">
													<div class="col-md-12 form-group">
													   <label>Address</label>
													   <input class="form-control" id= "address" name = "address" rows="3" value="{{ $user->address }}" autocomplete="on" required></input>
													</div>
												 </div>
												 <div class="row">
													<div class="col-md-6 form-group">
													   <label>Post Code</label>
													   <input type="text" id = "post_code" name = "post_code" class="form-control" placeholder="" value="{{ $user->post_code }}" required>
													</div>
													<div class="col-md-6 form-group">
													   <label>City</label>
													   <input type="text" id = "city" name = "city" class="form-control" placeholder="" value="{{ $user->city }}" required>
													</div>
												 </div>
												 <input type = "hidden" name = "latitude" id = "latitude" value = "{{ $user->latitude }}">
												 <input type = "hidden" name = "longitude" id = "longitude" value = "{{ $user->longitude }}">
												 <h2>Restaurant Information</h2>
												 <div class = "row">
													<div class="col-md-6 form-group">
													   <label>Restaurant Name</label>
													   <input type="text" name = "restaurant_name" class="form-control" placeholder="" value="{{$user->restaurant_name}}" required>
													</div>
													<div class="col-md-6 form-group">
													   <label>Delivery Costs	</label>
													   <input type="text" name = "delivery_cost" class="form-control" placeholder="" value="{{$user->delivery_cost}}" required>
													</div>
												 </div>
												 <div class="row">
													<div class="col-md-6 form-group">
													   <label>Minimum order amount	</label>
													   <input type="text" name = "order_amount" class="form-control" placeholder="" value="{{$user->order_amount}}" required>
													</div>
												 </div>
												 <h2>Social Links</h2>
												 <div class="row">
													<div class="col-md-6 form-group">
													   <label>Website</label>
													   <input type="text" name = "website" class="form-control" placeholder="" value="{{ $user->website }}" required>
													</div>
													<div class="col-md-6 form-group">
													   <label>Instagram</label>
													   <input type="text" name = "instagram" class="form-control" placeholder="" value="{{$user->instagram}}" required>
													</div>
												 </div>
												 <div class="row">
													<div class="col-md-6 form-group">
													   <label>Facebook</label>
													   <input type="text" name = "facebook" class="form-control" placeholder="" value="{{$user->facebook}}" required>
													</div>
												 </div>
												 <div class="row">
													<div class="col-md-12 editbtn">
													   <input type="submit" class="btn" value="Update" />
													</div>
												 </div>
											  </div>
										   </div>
										</div>
									 </form>
									 
								  </div>
								  <!--<div class="profileinfo">
									 <form class="editprofileform">
										<div class="profilehdr">
										   <div class="profilelefthdr dashboardpfl_hdr editprofile_section editprfl_bottom">
											  <div class="infohdr editprofileinfo">
												 <div class="row">
													<div class="col-md-6 form-group">
													   <label>Post Code	</label>
													   <input type="text" name = "post_code" class="form-control" placeholder="" value="{{$user->post_code}}">
													</div>
													<div class="col-md-6 form-group">
													   <label>Delivery Costs	</label>
													   <input type="text" name = "delivery_cost" class="form-control" placeholder="" value="{{$user->delivery_cost}}">
													</div>
												 </div>
												 <div class="row">
													<div class="col-md-6 form-group">
													   <label>Minimum order amount	</label>
													   <input type="text" name = "order_amount" class="form-control" placeholder="" value="{{$user->	order_amount}}">
													</div>
												 </div>
												 <div class="row">
													<div class="col-md-12 editbtn">
													   <input type="submit" class="btn" value="Update" />
													</div>
												 </div>
											  </div>
										   </div>
										</div>
									 </form>
								  </div>-->
								  <!--<div class="tablerow">
									 <div class="tablediv">
									   <table>
									   <thead>
										 <tr>
										   <th>Post Code</th>
										   <th>Delivery Costs</th>
										   <th>Minimum order amount</th>
										   <th>Action</th>
										 </tr>
										</thead>
										 <tbody>
										 <tr>
										   <td>387493</td>
										   <td>$15</td>
										   <td>$500</td>
											<td class="actionbtn_icons"><a href="#"><img src="images/edit-line.svg" /></a><a href="#"><img src="images/delete-bin-line.svg" /></a></td>
										 </tr>
										 <tr>
										   <td>387493</td>
										   <td>$15</td>
										   <td>$500</td>
											<td class="actionbtn_icons"><a href="#"><img src="images/edit-line.svg" /></a><a href="#"><img src="images/delete-bin-line.svg" /></a></td>
										 </tr>
										 <tr>
										   <td>387493</td>
										   <td>$15</td>
										   <td>$500</td>
											<td class="actionbtn_icons"><a href="#"><img src="images/edit-line.svg" /></a><a href="#"><img src="images/delete-bin-line.svg" /></a></td>
										 </tr>
												  <tr>
										   <td>387493</td>
										   <td>$15</td>
										   <td>$500</td>
											<td class="actionbtn_icons"><a href="#"><img src="images/edit-line.svg" /></a><a href="#"><img src="images/delete-bin-line.svg" /></a></td>
										 </tr>    <tr>
										   <td>387493</td>
										   <td>$15</td>
										   <td>$500</td>
											<td class="actionbtn_icons"><a href="#"><img src="images/edit-line.svg" /></a><a href="#"><img src="images/delete-bin-line.svg" /></a></td>
										 </tr>
									 </tbody>
									   </table>
									 
									 </div>
									 
									   </div>-->
							   </div>
							</div>
							<div class="col infosection_div storetiming_sec storetimingcol editstoretimingcol">
							   <ul class="timingsec timingfields">
								  <h3>Open/Close times<a href="#">Edit</a></h3>
								  <li class="timings opentime">
									 <span class="weakday">Monday</span>
									 <span class="weaktimings">
										<!--Default date and time picker -->
										<div class="form-group">
										   <input id="datetime_pick1" class="form-control" placeholder="Select Date and Time" />
										</div>
									 </span>
								  </li>
								  <li class="timings opentime">
									 <span class="weakday">Tuesday</span>
									 <span class="weaktimings">
										<div class="form-group">
										   <input id="datetime_pick2" class="form-control" placeholder="Select Date and Time" />
										</div>
									 </span>
								  </li>
								  <li class="timings opentime">
									 <span class="weakday">Wednesday</span>
									 <span class="weaktimings">
										<div class="form-group">
										   <input id="datetime_pick3" class="form-control" placeholder="Select Date and Time" />
										</div>
									 </span>
								  </li>
								  <li class="timings opentime">
									 <span class="weakday">Thursday</span>
									 <span class="weaktimings">
										<div class="form-group">
										   <input id="datetime_pick4" class="form-control" placeholder="Select Date and Time" />
										</div>
									 </span>
								  </li>
								  <li class="timings opentime">
									 <span class="weakday">Friday</span>
									 <span class="weaktimings">
										<div class="form-group">
										   <input id="datetime_pick5" class="form-control" placeholder="Select Date and Time" />
										</div>
									 </span>
								  </li>
								  <li class="timings opentime">
									 <span class="weakday">Saturday</span>
									 <span class="weaktimings">
										<div class="form-group">
										   <input id="datetime_pick6" class="form-control" placeholder="Select Date and Time" />
										</div>
									 </span>
								  </li>
								  <li class="timings closetime"><span class="weakday">Sunday</span><span class="weaktimings">Closed</span></li>
								  <div class="col-md-12 editbtn pb-3 text-right">
									 <input type="submit" class="btn" value="Update">
								  </div>
							   </ul>
							</div>
						 </div>
					  </section>
				   </div>
				</div>
			 </div>
		 <!-- </main>-->
		  <script src="{{ url('frontend/js/selectable.js')}}"></script>
		  <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
		  <script src="{{ url('frontend/js/croppie.js')}}" type="text/javascript"></script>
		  <script src="{{ url('frontend/js/user.js')}}" type="text/javascript"></script>
		  <script type="text/javascript">
			 $(document).on('ready', function() {
			 $('.center').slick({
			 centerMode: true,
			 centerPadding: '0px',
			 slidesToShow: 7,
			 autoplay: true,
			 arrows: true,
			 autoplaySpeed: 2000,
			 responsive: [
			 {
			   breakpoint: 1441,
			   settings: {
				 arrows: true,
				 centerMode: true,
				 centerPadding: '0px',
				 slidesToShow: 6
			   }
			 },
			 
			 {
			   breakpoint: 1281,
			   settings: {
				 arrows: true,
				 centerMode: true,
				 centerPadding: '0px',
				 slidesToShow: 5
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
			   breakpoint: 575,
			   settings: {
				 arrows: true,
				 centerMode: true,
				 centerPadding: '0px',
				 slidesToShow: 2
			   }
			 },
				{
			   breakpoint: 414,
			   settings: {
				 arrows: true,
				 centerMode: true,
				 centerPadding: '0px',
				 slidesToShow: 1
			   }
			 }
			 
			 ]
			 });
			 
			 });
		  </script>
		  <script>
			 // Selectable
			 
			 const list1 = document.getElementById("switch1");
			 
			 const selectable1 = new Selectable({
			 filter: list1.children,
			 appendTo: list1
			 });
			 
			 const list2 = document.getElementById("switch2");
			 
			 const selectable2 = new Selectable({
			 filter: list2.children,
			 appendTo: list2
			 });
			 
		  </script>
		  <script>
			 $(function() {
				var Accordion = function(el, multiple) {
					this.el = el || {};
					this.multiple = multiple || false;
			 
					// Variables privadas
					var links = this.el.find('.link');
					// Evento
					links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
				}
			 
				Accordion.prototype.dropdown = function(e) {
					var $el = e.data.el;
						$this = $(this),
						$next = $this.next();
			 
					$next.slideToggle();
					$this.parent().toggleClass('open');
			 
			 
				}	
			 
				var accordion = new Accordion($('#accordion'), false);
			 });
		  </script>
	   </body>
	   <!-- The Modal -->
	   <div class="modal getcpn_modal" id="couponmodal">
		  <div class="modal-dialog">
			 <div class="modal-content">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<!-- Modal body -->
				<div class="modal-body">
				   <img src="{{asset('frontend/images/elcarne.png')}}" />
				   <h4>Elcarne <img src="{{asset('frontend/images/information.svg')}}" class="infoicon" /></h4>
				   <h5>Buy 2 Burgers, get 1 free!</h5>
				   <p>Bestel twee burgers en ontvang de derde gratis!</p>
				   <p>Expires on 31/10/2020 at 23:59</p>
				   <a href="#getcpnbtn1" data-toggle="modal" data-target="#couponmodal2" class="getcpnbtn">Get Coupon</a>
				</div>
			 </div>
		  </div>
	   </div>
	   <!-- The Modal -->
	   <div class="modal getcpn_modal getcpn_modal2" id="couponmodal2">
		  <div class="modal-dialog">
			 <div class="modal-content">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<!-- Modal body -->
				<div class="modal-body">
				   <img src="{{asset('frontend/images/elcarne.png')}}" />
				   <h4>Elcarne <img src="{{asset('frontend/images/information.svg')}}" class="infoicon" /></h4>
				   <h5>Buy 2 Burgers, get 1 free!</h5>
				   <p>Bestel twee burgers en ontvang de derde gratis!</p>
				   <p class="mb-0">Expires on 31/10/2020 at 23:59</p>
				   <p class="mb-0">Client no : 54567</p>
				   <h3>Ordernumber : 596 5543</h3>
				   <div class="coupon_code">
					  <div class="row">
						 <div class="col-md-8">
							<p>Lorem Ipsum is simply dummy text of the printing and typesetng industry. Lorem Ipsum has been the industry's standard dummy text ever..</p>
						 </div>
						 <div class="col-md-4 scannerimg">
							<img src="{{asset('frontend/images/scanner.png')}}" />
						 </div>
					  </div>
				   </div>
				   <a href="#" data-dismiss="modal">Get Coupon</a>
				</div>
			 </div>
		  </div>
	   </div>
	   <!-- The Modal -->
	   <div class="modal getcpn_modal couponmodal1" id="couponmodal">
		  <div class="modal-dialog">
			 <div class="modal-content">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<!-- Modal body -->
				<div class="modal-body">
				   <img src="{{asset('frontend/images/elcarne.png')}}" />
				   <h4>Elcarne <img src="{{asset('frontend/images/information.svg')}}" class="infoicon" /></h4>
				   <h5>Buy 2 Burgers, get 1 free!</h5>
				   <p>Bestel twee burgers en ontvang de derde gratis!</p>
				   <p>Expires on 31/10/2020 at 23:59</p>
				   <a href="" id="getcpnbtn1" data-toggle="modal" data-target="#couponmodal2" class="getcpnbtn">Get Coupon</a>
				</div>
			 </div>
		  </div>
	   </div>
	   <!-- The Modal -->
	   <div class="modal getcpn_modal getcpn_modal2" id="couponmodal2">
		  <div class="modal-dialog">
			 <div class="modal-content">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<!-- Modal body -->
				<div class="modal-body">
				   <img src="{{asset('frontend/images/elcarne.png')}}" />
				   <h4>Elcarne <img src="{{asset('frontend/images/information.svg')}}" class="infoicon" /></h4>
				   <h5>Buy 2 Burgers, get 1 free!</h5>
				   <p>Bestel twee burgers en ontvang de derde gratis!</p>
				   <p class="mb-0">Expires on 31/10/2020 at 23:59</p>
				   <p class="mb-0">Client no : 54567</p>
				   <h3>Ordernumber : 596 5543</h3>
				   <div class="coupon_code">
					  <div class="row">
						 <div class="col-md-8">
							<p>Lorem Ipsum is simply dummy text of the printing and typesetng industry. Lorem Ipsum has been the industry's standard dummy text ever..</p>
						 </div>
						 <div class="col-md-4 scannerimg">
							<img src="images/scanner.png" />
						 </div>
					  </div>
				   </div>
				   <div class="couponbtns">
					  <a href="#" class="orderbtn">Order Online</a>
					  <a href="#" class="storebtn">Call Store</a>
				   </div>
				</div>
			 </div>
		  </div>
	   </div>
	   
	   
	   
	   <!--Image cropper model-->
	
						
		<div class="modal fade upload_photo_modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg subs-modal profile_photo_modal">
		<div class="modal-content">
			
			
<div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Upload Photo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>			


	<div class="modal-body text-center">
				<div id="upload-demo"></div>

						<h6>Choose image to crop:</h6>
						<!--input type="file" id="image_file"--> 
						<input type="file" id="upload_profile_file" name="upload_profile_file" class="upload_input" accept="image/*" onchange="validate(this.value)">
						<label for="upload_profile_file"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"></path></svg> <span>Choose a file…</span></label>
						<p class="upload_profile_file_error error"></p>
						<button class="btn upload-image mt-0" disabled="disabled" style="margin-top:2%">Upload Image</button>
						<div class="alert alert-success" id="upload-success" style="display: none;margin-top:10px;"></div>

					<!--div class="col-md-4">
					<div id="preview-crop-image" style="background:#9d9d9d;width:200px;padding:50px 50px;height:200px;"></div>
					</div-->
			</div>
		</div>
	</div>
</div>
		
	   <script>
		  $(document).ready(function(){
			  $( '.getcpnbtn' ).click(function() {
				$( '.modal.getcpn_modal2' ).css('background-color', 'rgba(0,0,0,0.2)');
			  });	
		  });
	   </script>
	   <script>
		  $('#datetime_pick1').datetimepicker({ footer: true});
		  $('#datetime_pick2').datetimepicker({ footer: true});
		  $('#datetime_pick3').datetimepicker({ footer: true});
		  $('#datetime_pick4').datetimepicker({ footer: true});
		  $('#datetime_pick5').datetimepicker({ footer: true});
		  $('#datetime_pick6').datetimepicker({ footer: true});
	   </script>
	 
	@endsection