@extends('frontend.creaters.landing.landing')
@section('pageTitle','Store Profile')
@section('content')

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
                     </ul>
                  </div>
               </div>
               <div class="col rightcontentsec dashboardcontsec">
                  <section class="storesection innersection profilearea storeprofilesec">
                     <h2>Profile </h2>
                     <div class="row">
                        <div class="col storeprofilecol">
                           <div class="profilerow pt-2">
                              <div class="profileinfo">
                                 <div class="profilehdr">
                                    <div class="profilelefthdr dashboardpfl_hdr">
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
                                       <div class="infohdr">
                                          <h3>{{ $user->restaurant_name }}<span>{{ $user->first_name }} {{ $user->last_name }}</span></h3>
                                          <a href="tel:{{ $user->mobile_number }}">{{ $user->mobile_number }}</a>
                                          <a href="mailto:{{ $user->email }}">{{ $user->email }}</a>
                                       </div>
                                    </div>
                                    <div class="profilerighthdr">
                                       <a href="{{('/edit-store-profile')}}" class="editbtn">Edit Profile</a>
                                       <a href="{{('/edit-store-password')}}" class="reserbtn">Reset Password</a>
                                    </div>
                                 </div>
                                 <div class="profilecont infocont_sec">
                                    <div class="row">
                                       <div class="col-md-5 prof_info">
                                          <span>Address</span>
                                          <p>{{ $user->address }}</p>
                                       </div>
                                       <div class="col-md-4 prof_info">
                                          <span>Post Code</span>
                                          <p>{{ $user->post_code }}</p>
                                       </div>
                                       <div class="col-md-3 prof_info">
                                          <span>City</span>
                                          <p>{{ $user->city }}</p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="infocont_sec infosocial_links">
                                    <h4>Social Links</h4>
                                    <div class="profilecont infocont">
                                       <div class="row">
                                          <div class="col-md-6 prof_info social_info">
                                             <img src="{{asset('frontend/images/socialicon1.svg')}}" />
                                             <p><span>Website </span><a target= "_blank" href="{{ $user->website }}">{{ $user->website }}</a></p>
                                          </div>
                                          <div class="col-md-6 prof_info social_info">
                                             <img src="{{asset('frontend/images/socialicon3.svg')}}" />
                                             <p><span>Instagram </span><a target= "_blank" href="{{ $user->instagram }}">{{ $user->instagram }}</a></p>
                                          </div>
                                          <div class="col-md-6 prof_info social_info">
                                             <img src="{{asset('frontend/images/socialicon2.svg')}}" />
                                             <p><span>Facebook </span><a target= "_blank" href="{{ $user->facebook }}">{{ $user->facebook }}</a></p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
							  
							  <a href= "{{ url('add-post-code') }}" class="add_location"><i class="fa fa-plus"></i> Add</a>
                              <div class="tablerow">
                                 <div class="tablediv">
                                    <table>
                                       <thead>
                                          <tr>
                                             <th>Range</th>
                                             <th>Delivery Costs</th>
                                             <th>Minimum order amount</th>
                                             <th>Action</th>
                                          </tr>
                                       </thead>
                                       <tbody>
									   <?php //echo "<pre>";print_r($user->storepostcodes);die("here13"); ?>
									   @if(isset($user->storepostcodes) && !empty($user->storepostcodes) && count($user->storepostcodes) > 0)
										   
										   @foreach($user->storepostcodes as $postval)
											<tr>
                                             <td>> {{$postval->delivery_range}} km</td>
                                             <td>${{$postval->delivery_cost}}</td>
                                             <td>${{$postval->order_amount}}</td>
                                             <td class="actionbtn_icons">
												<a href="{{ url('edit-post-code/'.$postval->id)}}"><img src="{{asset('frontend/images/edit-line.svg')}}" /></a>
												<a href="{{ url('delete-post-code/'.$postval->id)}}"> <img src="{{asset('frontend/images/delete-bin-line.svg')}}" /></a>
											 </td>
											</tr>
										   @endforeach
										@else
											<tr><td>No Results</td></tr>
									   @endif
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col infosection_div storetiming_sec storetimingcol">
                           <ul class="timingsec">
                              <h3>Open/Close times<a href="{{url('edit-store-time')}}">Edit</a></h3>
							  @if(isset($user->storetimings) && !empty($user->storetimings))
								  <li class="timings opentime"><span class="weakday">Monday</span><span class="weaktimings">{{ $user->storetimings['mon_start'] }} - {{ $user->storetimings['mon_end'] }}</span></li>
								  <li class="timings opentime"><span class="weakday">Tuesday</span><span class="weaktimings">{{ $user->storetimings['tue_start'] }} - {{ $user->storetimings['tue_end'] }}</span></li>
								  <li class="timings opentime"><span class="weakday">Wednesday</span><span class="weaktimings">{{ $user->storetimings['wed_start'] }} - {{ $user->storetimings['wed_end'] }}</span></li>
								  <li class="timings opentime"><span class="weakday">Thursday</span><span class="weaktimings">{{ $user->storetimings['thu_start'] }} - {{ $user->storetimings['thu_end'] }}</span></li>
								  <li class="timings opentime"><span class="weakday">Friday</span><span class="weaktimings">{{ $user->storetimings['fri_start'] }} - {{ $user->storetimings['fri_end'] }}</span></li>
								  <li class="timings opentime"><span class="weakday">Saturday</span><span class="weaktimings">{{ $user->storetimings['sat_start'] }} - {{ $user->storetimings['sat_end'] }}</span></li>
								  <li class="timings closetime"><span class="weakday">Sunday</span><span class="weaktimings">{{ $user->storetimings['sun_start'] }} - {{ $user->storetimings['sun_end'] }}</span></li>
							  @else
								<li class="timings opentime"><span class="weakday">Monday</span><span class="weaktimings">Not Set</span></li>
								  <li class="timings opentime"><span class="weakday">Tuesday</span><span class="weaktimings">Not Set</span></li>
								  <li class="timings opentime"><span class="weakday">Wednesday</span><span class="weaktimings">Not Set</span></li>
								  <li class="timings opentime"><span class="weakday">Thursday</span><span class="weaktimings">Not Set</span></li>
								  <li class="timings opentime"><span class="weakday">Friday</span><span class="weaktimings">Not Set</span></li>
								  <li class="timings opentime"><span class="weakday">Saturday</span><span class="weaktimings">Not Set</span></li>
								  <li class="timings closetime"><span class="weakday">Sunday</span><span class="weaktimings">Closed</span></li>

							  @endif
                              
                           </ul>
                           <ul class="timingsec mt-4">
                              <h3>Betaalopties<a href="{{url('edit-payment-options')}}">Edit</a></h3>
                              @foreach($user->paymentoptions as $paymentOptions)
                                 <li class="timings opentime"><span class="weakday payment_options">{{ $paymentOptions['payment_options'] }}</span></li>
                              @endforeach
                           </ul>
                        </div>

                        
                     </div>
                  </section>
               </div>
            </div>
         </div>
	  
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
                        <img src="{{asset('frontend/images/scanner.png')}}" />
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
   <script>
      $(document).ready(function(){
          $( '.getcpnbtn' ).click(function() {
      		$( '.modal.getcpn_modal2' ).css('background-color', 'rgba(0,0,0,0.2)');
          });	
      });
      
      
   </script>
@endsection