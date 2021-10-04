@extends('frontend.creaters.landing.landing')
@section('pageTitle','Profile')
@section('content')

<link rel="stylesheet" href="{{ url('frontend/css/user.css')}}" type="text/css" />
	
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
                        <li class="nav-link dropdown-toggle couponlink active">
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
                        <li class="nav-link dropdown-toggle alertlink">
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
					<section class="storesection innersection profilearea storeprofilesec">
                     <h2>Edit Profile </h2>
                     <div class="row">
                        <div class="col storeprofilecol">
                           <div class="profilerow pt-2">
                              <div class="profileinfo">
                                 <form class="editprofileform" action = "{{ route('user.storeuser') }}" method="post" enctype="multipart/form-data">
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
															 <a href="javascript:void(0)" data-toggle="modal" data-target=".upload_photo_modal" class="show_image"  >
																<div id='profile-upload'>
																 <img class="profile_photo_change" src="{{timthumb($photo,80,80)}}">
																</div>
															 </a>
														@endif
													</div>
                                                <div class="p-image">
                                                   <div class="upload-button upload-buttondiv">
                                                     <img src="{{asset('frontend/images/picture.svg')}}" />
                                                   </div>
                                                   <input class="file-upload" type="file" accept="image/*">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="infohdr editprofileinfo">
												 <h2>Basic Info</h2>
												 <div class="row">
													<div class="col-md-6 form-group">
													   <label>First Name</label>
													   <input type="text" name = "first_name" class="form-control" placeholder="" value="{{ $user->first_name }}" id="first_name">
													</div>
													<div class="col-md-6 form-group">
													   <label>Last Name</label>
													   <input type="text" name = "last_name" class="form-control" placeholder="" value="{{ $user->last_name }}" id="last_name">
													</div>
												 </div>
												 <div class="row">
													<div class="col-md-6 form-group">
													   <label>Phone Number</label>
													   <input type="text" name = "mobile_number" class="form-control" placeholder="" value="{{ $user->mobile_number }}" id="mobile_number">
													</div>
													<div class="col-md-6 form-group">
													   <label>Email</label>
													   <input type="email" name = "email" class="form-control" placeholder="johndoe@gmail.com" value="{{ $user->email }}" disabled>
													</div>
												 </div>
												 <div class="row">
													<div class="col-md-12 form-group">
													   <label>Address</label>
													   <input class="form-control" id= "address" name = "address" rows="3" value="{{ $user->address }}" autocomplete="on"></input>
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
												 <div class="row">
													<div class="col-md-12 editbtn">
													   <input type="submit" onclick="submituserprofile(event);" class="btn" value="Update" />
													</div>
												 </div>
											  </div>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </section>
               </div>
            </div>
         </div>
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
				</div>
			</div>
		</div>
	</div>
@endsection