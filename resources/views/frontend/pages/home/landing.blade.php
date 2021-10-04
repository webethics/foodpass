@extends('frontend.creaters.landing.landing')
@section('pageTitle','Landing')
@section('content')
         <section class="bannersection videoheader">
            <div class="container">
               <div class="videooverlay"></div>
               <!--video autoplay="autoplay" muted="muted">
                  <source src="{{asset('frontend/videos/FoodpassHomepageMainbackground.mp4')}}" type="video/mp4">
               </video-->
               <h1 class="wow fadeInUp" data-wow-duration="1500ms">Hetzelfde gerecht, <br/>voor de laagste prijs!</h1>
               <div class="home-search-bg">
                  <form class="form-inline searchform justify-content-center mt-4" action = "{{ url('/store') }}" method="post" enctype="multipart/form-data">
               {{ csrf_field() }}
                     <input class="form-control mr-sm-2" id="address_search" type="search" placeholder="Enter Location" aria-label="Search">
               <input type = "hidden" id="search_lat" name="search_lat">
               <input type = "hidden" id="search_lng" name="search_lng">
                     <button class="btn" onclick="searchrestaurant(event);" type="submit"><img src="{{asset('frontend/images/arrowwhite.png')}}" /></button>
                  </form>
               </div>
            </div>
         </section>
         <section class="homesection howitwork_sec">
            <div class="container">
               <h2 class="pagetitle text-center wow fadeInUp" data-wow-duration="1500ms">Hoe werkt het ?</h2>
               <div class="row mt-5">
                  <div class="col-md-4 workblk">
                     <div class="workblk_bg blue_bg">
                        <img src="{{asset('frontend/images/findlocation.png')}}" />
                        <h3>Voer je locatie in</h3>
                        <p>Enter your address or let us determine your position.</p>
                     </div>
                  </div>
                  <div class="col-md-4 workblk">
                     <div class="workblk_bg green_bg">
                        <img src="{{asset('frontend/images/coupon.png')}}" />
                        <h3>Kies een coupon</h3>
                        <p>What do you fancy? Scroll through numerous menus and ratings.</p>
                     </div>
                  </div>
                  <div class="col-md-4 workblk">
                     <div class="workblk_bg pink_bg">
                        <img src="{{asset('frontend/images/delivered.png')}}" />
                        <h3>Bestel, en geniet<br/> van je maaltijd!</h3>
                        <p>Pay cash or online with Credit card, PayPal. Enjoy your meal!</p>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="homesection about_sec">
            <div class="container">
               <h2 class="pagetitle text-center wow fadeInUp" data-wow-duration="1500ms">Over Foodpass</h2>
               <p class="text-center mt-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis eleifend quam adipiscing vitae proin sagittis nisl. Venenatis a condimentum vitae sapien pellentesque habitant. Ornare arcu odio ut sem. Non quam lacus suspendisse faucibus interdum posuere lorem. Dui ut ornare lectus sit amet est. Ut enim blandit volutpat maecenas volutpat blandit aliquam etiam erat. <a class="about-read-more" href="{{ url('about-us') }}">Read more..</a></p>
               <div class="row mt-5" style="background:url({{asset('frontend/images/bg-img.png')}});width:90%;margin:0 auto;" >
                  <div class="col-md-9 about-div mt-5 mb-5">
                     <div class="about-banner-header">
                        Als premium klant...
                     </div>
                     <ul class="about-list-data">
                        <li>betall je voor iedere bestelling gegarandeerd de laagste prijis!</li>
                        <li>steun je direct jouw lokale horeca en buurtwinkels(buurtsuper, bakker etc.)!</li>
                        <li>maak je dagelijks kans op gratis maaltijden, booschappen en meer prijzen!</li>
                     </ul>
                  </div>
                  <div class="col-md-3 about-div mt-5">
                        <a href="#" class="about-link">Bereken jouw voordeal!</a>
                  </div>
               </div>
               <!--div class="row">
                  <div class="col-md-12 aboutimg mt-5">
                     <img src="{{asset('frontend/images/aboutimg.jpg')}}" class="img-fluid" />
                  </div>
               </div-->
            </div>
         </section>
         <section class="homesection featured_sec">
            <div class="container">
               <h2 class="pagetitle text-center wow fadeInUp" data-wow-duration="1500ms">Uitgelichte coupons</h2>
               <section class="featuredslider center slider mt-5">
			    @if(isset($coupons) && !empty($coupons))
					@foreach($coupons as $coupon)
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
                  <div class="featured_blk">
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
								@if(Auth::user())
									<a href="#"  class = "view_coupon" data-id="{{$coupon->id}}">VIEW COUPON</a>
								@else
									<a href="#" data-toggle="modal" data-target="#formmodal">VIEW COUPON</a>
								@endif
								
							 </div>
						</div>
                     </div>
                  </div>
				  @endforeach
				@endif
                  <!--<div class="featured_blk">
                     <div class="featured_blkdiv">
                        <div class="featured_img">
                           <img src="{{asset('frontend/images/featuredimg.png')}}" class="img-fluid" />
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
                              <a href="#">GET coupon</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="featured_blk">
                     <div class="featured_blkdiv">
                        <div class="featured_img">
                           <img src="{{asset('frontend/images/featuredimg.png')}}" class="img-fluid" />
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
                              <a href="#">GET coupon</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="featured_blk">
                     <div class="featured_blkdiv">
                        <div class="featured_img">
                           <img src="{{asset('frontend/images/featuredimg.png')}}" class="img-fluid" />
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
                              <a href="#">GET coupon</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="featured_blk">
                     <div class="featured_blkdiv">
                        <div class="featured_img">
                           <img src="{{asset('frontend/images/featuredimg.png')}}" class="img-fluid" />
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
                              <a href="#">GET coupon</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="featured_blk">
                     <div class="featured_blkdiv">
                        <div class="featured_img">
                           <img src="{{asset('frontend/images/featuredimg.png')}}" class="img-fluid" />
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
                              <a href="#">GET coupon</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="featured_blk">
                     <div class="featured_blkdiv">
                        <div class="featured_img">
                           <img src="{{asset('frontend/images/featuredimg.png')}}" class="img-fluid" />
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
                              <a href="#">GET coupon</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="featured_blk">
                     <div class="featured_blkdiv">
                        <div class="featured_img">
                           <img src="{{asset('frontend/images/featuredimg.png')}}" class="img-fluid" />
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
                              <a href="#">GET coupon</a>
                           </div>
                        </div>
                     </div>
                  </div>-->
               </section>
            </div>
         </section>
         <section class="homesection offersec">
            <div class="container">
               <div class="row">
                  <div class="col-md-6 offercont mt-4">
                     <h2 class="pagetitle wow fadeInUp" data-wow-duration="1500ms">Ontvang alerts voor <br/> je favoriete maaltijden!</h2>
                     <p>Deal Alert is looking for daily offers for you And sends you a notification as soon as something is found</p>
                     @if(Auth::user())
                        @php
                        $role = Auth::user()->role_id
                        @endphp
                        @if($role == 2)
                           <a href="{{url('/alerts')}}">Get Alert</a>
                        @elseif($role == 3)
                           <a href="{{url('/booking')}}">Get Alert</a>
                        @endif   
                        @else
                           <a href="#" data-toggle="modal" data-target="#formmodal">GET Alert</a>
                        @endif
                     
                  </div>
                  <div class="col-md-6 offerimg mt-4">
                     <img src="{{asset('frontend/images/alert.png')}}" class="img-fluid" />
                     
                  </div>
               </div>
            </div>
         </section>
		 
		 
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
	
	
	
	
	<script src="{{ url('frontend/js/coupon.js')}}" type="text/javascript"></script>
       <script src="{{ url('frontend/js/custom.js')}}"></script>	
	  @endsection