@extends('frontend.creaters.landing.landing')
@section('pageTitle','coupons')
@section('content')

     <div class="container innercontainer storecontainer">
            <div class="row">
               <div class="col leftsidebarsec profileftsidebar mobsidebar">
                  <div class="sidebar_cont profilesidebar">
                     <div class="userinfo">
                        <div class="userimage">
							@if($user->profile_photo==NULL)
							  <img src="{{asset('frontend/images/userimage.png')}}">
							@else
								
							@php
								$photo =  profile_photo($user->id);
							@endphp
								<img src="{{timthumb($photo,80,80)}}">
							@endif
                           
                        </div>
                        <h4>{{ $user->restaurant_name }}</h4>
                        <a href="{{ $user->website }}">{{ $user->website }}</a>
                        <a href="tel:{{ $user->mobile_number }}">{{ $user->mobile_number }}</a>
                     </div>
                     <ul class="accordion profilelist" id="accordion">
                        <li class="nav-link dropdown-toggle couponlink active">
                           <a href="/coupons/{{$user->id}}">
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
                        <li class="nav-link dropdown-toggle menukartlink">
                           <a href="/menukaart/{{$user->id}}">
                              <div class="link">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <defs>
                                       <style>.a{fill:none;}</style>
                                    </defs>
                                    <path class="a" d="M0,0H24V24H0Z"/>
                                    <path d="M3,4H21V6H3Zm0,7H21v2H3Zm0,7H21v2H3Z"/>
                                 </svg>
                                 MenuKaart
                              </div>
                           </a>
                        </li>
                        <li class="nav-link dropdown-toggle reviewlink">
                           <a href="#">
                              <div class="link">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <defs>
                                       <style>.a{fill:none;}</style>
                                    </defs>
                                    <path class="a" d="M0,0H24V24H0Z"/>
                                    <path d="M12,18.26,4.947,22.208,6.522,14.28.587,8.792,8.614,7.84,12,.5l3.386,7.34,8.027.952L17.478,14.28l1.575,7.928Zm0-2.292,4.247,2.377L15.3,13.572l3.573-3.305-4.833-.573L12,5.275,9.962,9.695l-4.833.572L8.7,13.572l-.949,4.773Z"/>
                                 </svg>
                                 Reviews
                              </div>
                           </a>
                        </li>
                        <li class="nav-link dropdown-toggle infolink ">
                           <a href="/info/{{$user->id}}">
                              <div class="link">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <defs>
                                       <style>.a{fill:none;}</style>
                                    </defs>
                                    <path class="a" d="M0,0H24V24H0Z"/>
                                    <path d="M12,22A10,10,0,1,1,22,12,10,10,0,0,1,12,22Zm0-2a8,8,0,1,0-8-8A8,8,0,0,0,12,20ZM11,7h2V9H11Zm0,4h2v6H11Z"/>
                                 </svg>
                                 Info
                              </div>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="col rightcontentsec">
                  <section class="storesection innersection couponsection">
                     <h2>Coupons</h2>
                     <div class="row">
					 @if(isset($user->verifiedcoupons) && !empty($user->verifiedcoupons->toArray()))
					 
						@foreach($user->verifiedcoupons as $coupon)
							@php
								$photo =  coupon_image($coupon->id);
								$pickup_delivery = $coupon->coupon_pickup_delivery == 1 ? "Pickup" : "Deliver";
								$expire_date = date("d M, Y",$coupon->coupon_end_time);
                        $expire_time = date("h:i a",$coupon->coupon_end_time);
                        $to_time = strtotime("now");
                        $minutes =  round(abs($coupon->coupon_end_time - $to_time) / 60,2);
                        $days = floor ($minutes / 1440);
                        $hours = floor (($minutes - $days * 1440) / 60);
                        $min = $minutes - ($days * 1440) - ($hours * 60);
                        $typeArr = array();
                        $typeArr = explode(',', $coupon->coupon_display);
                        $arrCheck = [1, 2];
							@endphp 
                        <div class="col-md-4 featured_blk">
                           <div class="featured_blkdiv">
                              <div class="featured_img">
                              <div class="image_tags">
                                 @if($coupon->coupon_pickup_delivery == 1)
                                    <span class="status_tag pickup">OPEN</span>
                                 @else($coupon->coupon_pickup_delivery == 2)
                                    <span class="status_tag delivery">DICHT</span>
                                 @endif
                                 @if(in_array("3", $typeArr))
                                    <span class="premium_tag"><img src="{{asset('frontend/images/premium.png')}}" /></span>
                                 @else
                                    <span class="status_tag empty"></span>
                                 @endif
                                 @if($coupon->discount_1 != '')
                                    <span class="discount_tag">{{$coupon->discount_1}}%</span>
                                 @else
                                    <span class="status_tag empty"></span>
                                 @endif
                                 @if (array_intersect($arrCheck, $typeArr))
                                    <span class="free_tag">FREE</span>
                                 @else
                                    <span class="status_tag empty"></span>
                                 @endif
                              </div>
                                 <img src="{{$photo}}" class="img-fluid" />
                              </div>
                              <div class="featured_blkcontsec">
                                    <span class="offer_tag">{{$coupon->discount_1}}%<br/><span class="lightweight">Off</span></span>
                                    <h4>{{$coupon->product_name}}</h4>
                                    <span class="date">Expires in: 
                                       <span class="home-coupon-expire" style="display:block;">
                                          <b>
                                          @php if($days){
                                             echo $days.' days ';
                                          } if($hours){
                                             echo $hours.' hours '; 
                                          } if($min){
                                             echo floor($min).' minutes'; 
                                          } 
                                          @endphp
                                          </b>
                                          </span>
                                    </span>
                                    <div class="borderdiv">
                                       <span class="borderleft"></span>
                                       <span class="borderright"></span>
                                    </div>
                                    <div class="featured_blkcont">
                                    <h5>{{$coupon->details}}</h5>
                                    <a href="#"  class = "view_coupon" data-id="{{$coupon->id}}">GET coupon</a>
                                 </div>
                              </div>
                           </div>
                        </div>
						@endforeach
						@else
						 <div class="storeblk" style="width:100%">No result found.</div>
						@endif
                        <!--<div class="col-md-4 featured_blk">
                           <div class="featured_blkdiv">
                              <div class="featured_img">
                                 <img src="images/featuredimg.png" class="img-fluid" />
                              </div>
                              <div class="featured_blkcontsec">
                                 <span class="offer_tag">20%<br/><span class="lightweight">Off</span></span>
                                 <h4>Free Sauce on Fries</h4>
                                 <span class="date">Valid Till : 25 Oct, 2020</span>
                                 <div class="borderdiv">
                                    <span class="borderleft"></span>
                                    <span class="borderright"></span>
                                 </div>
                                 <div class="featured_blkcont">
                                    <h5>Johnny's Burgers</h5>
                                    <a href="#" data-toggle="modal" data-target="#couponmodal">GET coupon</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-4 featured_blk">
                           <div class="featured_blkdiv">
                              <div class="featured_img">
                                 <img src="images/featuredimg.png" class="img-fluid" />
                              </div>
                              <div class="featured_blkcontsec">
                                 <span class="offer_tag freecoupon">Free</span>
                                 <h4>Free Sauce on Fries</h4>
                                 <span class="date">Valid Till : 25 Oct, 2020</span>
                                 <div class="borderdiv">
                                    <span class="borderleft"></span>
                                    <span class="borderright"></span>
                                 </div>
                                 <div class="featured_blkcont">
                                    <h5>Johnny's Burgers</h5>
                                    <a href="#" data-toggle="modal" data-target="#couponmodal">GET coupon</a>
                                 </div>
                              </div>
                           </div>
                        </div>-->
                     </div>
                  </section>
               </div>
            </div>
         </div>
		 <script src="{{ url('frontend/js/coupon.js')}}" type="text/javascript"></script>
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
	  <!-- The Modal -->
   <div class="modal getcpn_modal" id="couponmodal">
      <div class="modal-dialog">
         <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <!-- Modal body -->
            <div class="modal-body">
               <img id="coupon_view_image" src="{{asset('frontend/images/elcarne.png')}}" />
               <h4 id="coupon_view_name">Elcarne <img src="{{asset('frontend/images/information.svg')}}" class="infoicon" /></h4>
               <h5>Buy 2 Burgers, get 1 free!</h5>
               <p id="coupon_view_details">Bestel twee burgers en ontvang de derde gratis!</p>
               <p id="coupon_view_expire">Expires on 31/10/2020 at 23:59</p>
               <a href="#" class="getcpnbtn" id="couponorder">Get Coupon</a>
               <!--<a href="#getcpnbtn1" data-toggle="modal" data-target="#couponmodal2" class="getcpnbtn">Get Coupon</a>-->
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
               <img src="images/elcarne.png" />
               <h4>Elcarne <img src="images/information.svg" class="infoicon" /></h4>
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
               <img src="images/elcarne.png" />
               <h4>Elcarne <img src="images/information.svg" class="infoicon" /></h4>
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
               <img src="images/elcarne.png" />
               <h4>Elcarne <img src="images/information.svg" class="infoicon" /></h4>
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
   <script>
      $(document).ready(function(){
          $( '.getcpnbtn' ).click(function() {
      		$( '.modal.getcpn_modal2' ).css('background-color', 'rgba(0,0,0,0.2)');
          });	
      });
      
      
   </script>
@endsection