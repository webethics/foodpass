@if(isset($restaurant) && !empty($restaurant))
								@foreach($restaurant as $coupon)
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
                                 @if($coupon->coupon_pickup_delivery != '')
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
											<a href="#"  class = "view_coupon" data-id="{{$coupon->id}}">GET coupon</a>
										@else
											<a href="#" data-toggle="modal" data-target="#formmodal">GET coupon</a>
										@endif
										
									 </div>
								  </div>
							   </div>
							   </div>
								@endforeach
								@else
								<div class="storeblk">No Records Found.</div>
							@endif