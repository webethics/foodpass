 @if(isset($coupons) && !empty($coupons))
	@if($sortkey == 2 || $sortkey == "")
		@foreach($coupons as $coupon)
			@php
				$photo =  coupon_image($coupon->mycoupons->id);
				$pickup_delivery = $coupon->mycoupons->coupon_pickup_delivery == 1 ? "Pickup" : "Deliver";
				$expire_date = date("d M, Y",$coupon->mycoupons->coupon_end_time);
				$expire_time = date("h:i a",$coupon->mycoupons->coupon_end_time);
			@endphp 
			  <div class="col-md-4 featured_blk">
				 <div class="featured_blkdiv">
					<div class="featured_img">
					   <img src="{{$photo}}" class="img-fluid" />
					</div>
					<div class="featured_blkcontsec">
						 <span class="offer_tag">{{$coupon->mycoupons->discount_1}}%<br/><span class="lightweight">Off</span></span>
						 <h4>{{$coupon->mycoupons->product_name}}</h4>
						 <span class="date">Valid Till : {{$expire_date}} & {{$expire_time}}</span>
						 <div class="borderdiv">
							<span class="borderleft"></span>
							<span class="borderright"></span>
						 </div>
						 <div class="featured_blkcont">
							<h5>{{$coupon->store->restaurant_name}}</h5>
							@if(Auth::user())
								<a href="#"  id="purchase_coupon" data-id="{{$coupon->id}}">GET coupon</a>
							@else
								<a href="#" data-toggle="modal" data-target="#formmodal">GET coupon</a>
							@endif
							
						 </div>
					</div>
				 </div>
				 @if($coupon->mycoupons->coupon_end_time < time() || $coupon->confirm_status == 1)
					<div id="expired_overlay"></div>
				 @endif
			  </div>
			  @endforeach
		  @elseif($sortkey == 1)
			@foreach($coupons as $coupon)
			@php
				$photo =  coupon_image($coupon->coupon_id);
				$pickup_delivery = $coupon->coupon_pickup_delivery == 1 ? "Pickup" : "Deliver";
				$expire_date = date("d M, Y",$coupon->coupon_end_time);
				$expire_time = date("h:i a",$coupon->coupon_end_time);
			@endphp 
			  <div class="col-md-4 featured_blk">
				 <div class="featured_blkdiv">
					<div class="featured_img">
					   <img src="{{$photo}}" class="img-fluid" />
					</div>
					<div class="featured_blkcontsec">
						 <span class="offer_tag">{{$coupon->discount_1}}%<br/><span class="lightweight">Off</span></span>
						 <h4>{{$coupon->product_name}}</h4>
						 <span class="date">Valid Till : {{$expire_date}} & {{$expire_time}}</span>
						 <div class="borderdiv">
							<span class="borderleft"></span>
							<span class="borderright"></span>
						 </div>
						 <div class="featured_blkcont">
							<h5>{{$coupon->restaurant_name}}</h5>
							@if(Auth::user())
								<a href="#"  id="purchase_coupon" data-id="{{$coupon->unique_purchase_id}}">GET coupon</a>
							@else
								<a href="#" data-toggle="modal" data-target="#formmodal">GET coupon</a>
							@endif
							
						 </div>
					</div>
				 </div>
				 @if($coupon->coupon_end_time < time() || $coupon->confirm_status == 1)
					<div id="expired_overlay"></div>
				 @endif
			  </div>
			  @endforeach
		  @endif
		  
		  @else
		  <div class="storeblk">No Records Found.</div>
		@endif