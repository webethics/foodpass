 
 @php
						$count = 0;
					 @endphp
					 @if(isset($restaurant) && !empty($restaurant))
					 
						@foreach($restaurant as $val)
						   @php
						    $count++;
							$status = App\Models\StoreTimings::checktodaystatus($val->id);
							$profile_photo =  profile_photo($val->id);
							$get_Coupons   = App\Models\Coupons::getcouopon($val->id);

							$kitchens = get_store_kitchen($val->id);
						  @endphp
						  
						  <div class="storeblk">
								<div class="doticon">
								   <!--<i class="fa fa-share-alt"></i>-->
								</div>
								<div class="row">
									
								   <div class="col-md-3 storeimage">
									  <div class="storeimage_widget">
										 <img src="{{$profile_photo}}" />
										 @if($status == 1)
											<span class="opentag">Open</span>
										 @else
											 <span class="opentag closetag">Closed</span>
										@endif
									  </div>
								   </div>
								   
								   <div class="col-md-6 storeblkcont">
									@if(Auth::user())
										<a href = "/info/{{$val->id}}">
											<h3>{{$val->restaurant_name}}<img data-toggle="tooltip" title="Address: {{$val->address}} Phone:{{$val->mobile_number}}  Website:{{$val->website}}   " src="{{asset('frontend/images/information.svg')}}" /></h3>
										</a>
									@else
										<a href="#" data-toggle="modal" data-target="#formmodal">
											<h3>{{$val->restaurant_name}}
												<img data-toggle="tooltip" title="Address: {{$val->address}} Phone:{{$val->mobile_number}}  Website:{{$val->website}}   " src="{{asset('frontend/images/information.svg')}}" />
											</h3>
										</a>
									@endif
										
									  
									  
									  
									  <p>{{$kitchens}}</p>
									  	<!--@if(isset($val->store_min_amount))
											<span class="coupn_min_order">${{$val->store_min_amount}} Minimum Order</span>
										@else
											<span class="coupn_min_order">${{$val->order_amount}} Minimum Order</span>
										@endif -->
									  @if($get_Coupons['coupon_count'] > 0 )
                             		  	  <span class="copon_count">{{ $get_Coupons['coupon_count'] }} coupons available</span>
									  @else
										  <span class="copon_count">Momenteel geen beschikbare coupons.</span>
									  @endif
								   </div>
								   
								   @if(isset($get_Coupons['coupon']) && !empty($get_Coupons['coupon']) && $get_Coupons['coupon_count'] > 0)
								   <div class="col-md-3 viewcouponbtn whitebtn">
									  <a href="#" data-toggle="collapse" data-target="#couponcollapse{{$val->id}}" aria-expanded="false" aria-controls="couponcollapse{{$val->id}}"><span class="viewcpnbtn">View Coupon<i class="fa fa-angle-down"></i></span><span class="hidecpnbtn">Hide Coupon<i class="fa fa-angle-up"></i></span></a>
								   </div>
								   @endif
								   
								</div>
								<div class="collapse multi-collapse" id="couponcollapse{{$val->id}}">
								
								 @if(isset($get_Coupons['coupon']) && !empty($get_Coupons['coupon']) && $get_Coupons['coupon_count'] > 0)
									@foreach($get_Coupons['coupon'] as $coupon)
									@php
										$photo =  coupon_image($coupon->id);
										$pickup_delivery = $coupon->coupon_pickup_delivery == 1 ? "Pickup" : "Deliver";
										$expire_date = date("d M, Y",$coupon->coupon_end_time);
										$expire_time = date("h:i a",$coupon->coupon_end_time);
										$typeArr = array();
										$typeArr = explode(',', $coupon->coupon_display);
										$arrCheck = [1, 2];
									@endphp
								   <div class="store_offerssec">
									  <div class="store_offers">
										 <div class="row">
											<div class="col-md-9 store_offercont">
													@if($coupon->free_coupon_type != '')
											<span class="offertag free_offer">
												FREE
											</span>
											@endif
											@if($coupon->discount_1 != '')
											<span class="offertag">
												{{$coupon->discount_1}}%<br/><span class="lightweight">OFF</span>
											</span>
											@endif
															<div class="store_offertext">
																<p>{{$coupon->product_name}}
													@if(in_array("3", $typeArr))
														<span class="premium_tag"><img src="{{asset('frontend/images/premium.png')}}" /></span>
													@endif
													</p>
												  <span>Exp. on {{$expire_date}} at {{$expire_time}}</span>
											   </div>
											</div>
											<div class="col-md-3 viewcouponbtn">
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
								   @endif
								</div>
							 </div>
						@endforeach
					@endif
					@if($count == 0)
						<div class="storeblk">No Records Found</div>
					@endif	
