@php 
	$total = $coupons->count();
	$currentTime = strtotime('now');
	
@endphp
@if($sortkey == 2 || $sortkey == "")
<div class="row mt-3 pt-3 tabcontent my_coupon_div" id="Beschikbaar" style="display:flex;">
		
			@if(isset($coupons) && !empty($coupons) && $total > 0)
				@foreach($coupons as $coupon)
				@php
					$typeArr = array();
					$typeArr = explode(',', $coupon->mycoupons->coupon_display);
					$arrCheck = [1, 2];
				@endphp
			@if(isset($coupon->mycoupons->id) && $coupon->mycoupons->id != "" && $coupon->mycoupons->coupon_end_time >= $currentTime )
			@php
				$photo =  coupon_image($coupon->mycoupons->id);
				$pickup_delivery = $coupon->mycoupons->coupon_pickup_delivery == 1 ? "Pickup" : "Deliver";
				$expire_date = date("d M, Y",$coupon->mycoupons->coupon_end_time);
				$expire_time = date("h:i a",$coupon->mycoupons->coupon_end_time);
			@endphp 
		<div class="col-md-6 featured_blk">
			<div class="featured_blkdiv">
				<div class="row pt-3">
					<div class="col-md-7 mt-3 my_coupons_featured_blk">
					<div class="image_tags my_coupons">
						@if(in_array("3", $typeArr))
							<span class="premium_tag"><img src="{{asset('frontend/images/premium.png')}}" /></span>
						@endif
						@if($coupon->mycoupons->coupon_pickup_delivery != '')
							<span class="discount_tag">{{$coupon->mycoupons->discount_1}}%</span>
						@endif
						@if (array_intersect($arrCheck, $typeArr))
							<span class="free_tag">FREE</span>
						@endif
					</div>
					<h4>{{$coupon->mycoupons->product_name}}</h4>
					<span class="date">Valid Till : {{$expire_date}} </span>
					
					</div>
					<div class="col-md-5 my_coupons_featured_blk">
						<div class="featured_img"><img src="{{$photo}}" class="img-fluid" /></div>
					</div>
				</div>
				<div class="borderdiv my_coupon"></div>
				<div class="row mb-3 section_bottom">
					<div class="col-md-9 my_coupons_featured_blk">
						<h5>{{$coupon->store->first_name." ".$coupon->store->last_name }}</h5>
					</div>
					<div class="col-md-3 my_coupons_featured_blk">
						@if(Auth::user())
								<a href="#"  id="purchase_coupon" data-id="{{$coupon->id}}" class="my_coupon_purchase">View</a>
						@else
								<a href="#" data-toggle="modal" data-target="#formmodal" class="my_coupon_purchase">View</a>
						@endif
					</div>
					</div>
			</div>
		</div>
			@endif
		@endforeach
		
		@else
		
		<div class="storeblk" style="width:100%">No result found.</div>
		@endif
</div>
<div class="row mt-3 pt-3 tabcontent my_coupon_div" id="Verlopen" style="display:none;">
		
		@if(isset($coupons) && !empty($coupons) && $total > 0)
			@foreach($coupons as $coupon)
			@php
				$typeArr = array();
				$typeArr = explode(',', $coupon->coupon_display);
				$arrCheck = [1, 2];
			@endphp
		@if(isset($coupon->mycoupons->id) && $coupon->mycoupons->id != "" && $coupon->mycoupons->coupon_end_time < $currentTime)
		@php
			$photo =  coupon_image($coupon->mycoupons->id);
			$pickup_delivery = $coupon->mycoupons->coupon_pickup_delivery == 1 ? "Pickup" : "Deliver";
			$expire_date = date("d M, Y",$coupon->mycoupons->coupon_end_time);
			$expire_time = date("h:i a",$coupon->mycoupons->coupon_end_time);
		@endphp 
		<div class="col-md-6 featured_blk">
			<div class="featured_blkdiv expired">
				<div class="row pt-3">
				<div class="col-md-7 mt-3 my_coupons_featured_blk">
				<div class="image_tags my_coupons">
						@if(in_array("3", $typeArr))
							<span class="premium_tag"><img src="{{asset('frontend/images/premium.png')}}" /></span>
						@endif
						@if($coupon->mycoupons->coupon_pickup_delivery != '')
							<span class="discount_tag">{{$coupon->mycoupons->discount_1}}%</span>
						@endif
						@if (array_intersect($arrCheck, $typeArr))
							<span class="free_tag">FREE</span>
						@endif
					</div>
				<h4>{{$coupon->mycoupons->product_name}}</h4>
				<span class="expired_coupon_date">EXPIRED</span>
				
				</div>
				<div class="col-md-5 my_coupons_featured_blk">
					<div class="featured_img"><img src="{{$photo}}" class="img-fluid" /></div>
				</div>
				</div>
				<div class="borderdiv my_coupon"></div>
				<div class="row mb-3 section_bottom">
					<div class="col-md-9 my_coupons_featured_blk">
						<h5>{{$coupon->store->first_name." ".$coupon->store->last_name }}</h5>
					</div>
					<div class="col-md-3 my_coupons_featured_blk">
						@if(Auth::user())
							<a href="#"  id="purchase_coupon" data-id="{{$coupon->id}}" class="my_coupon_purchase">View</a>
						@else
							<a href="#" data-toggle="modal" data-target="#formmodal" class="my_coupon_purchase">View</a>
						@endif
					</div>
				</div>
			</div>
			<div id="expired_overlay"></div>
		</div>

		@endif
	@endforeach
	
	@else
	
	<div class="storeblk" style="width:100%">No result found.</div>
	@endif
	</div>
@elseif($sortkey == 1)
<div class="row mt-3 pt-3 tabcontent my_coupon_div" id="Beschikbaar" style="display:flex;">
			
			@if(isset($coupons) && !empty($coupons) && $total > 0)
				@foreach($coupons as $coupon)
				@php
					$typeArr = array();
					$typeArr = explode(',', $coupon->mycoupons->coupon_display);
					$arrCheck = [1, 2];
				@endphp
			@if(isset($coupon->mycoupons->id) && $coupon->mycoupons->id != "" && $coupon->mycoupons->coupon_end_time >= $currentTime )
			@php
				$photo =  coupon_image($coupon->coupon_id);
				$pickup_delivery = $coupon->coupon_pickup_delivery == 1 ? "Pickup" : "Deliver";
				$expire_date = date("d M, Y",$coupon->coupon_end_time);
				$expire_time = date("h:i a",$coupon->coupon_end_time);
			@endphp 
		<div class="col-md-6 featured_blk">
			<div class="featured_blkdiv">
				<div class="row pt-3">
					<div class="col-md-7 mt-3 my_coupons_featured_blk">
					<div class="image_tags my_coupons">
						@if(in_array("3", $typeArr))
							<span class="premium_tag"><img src="{{asset('frontend/images/premium.png')}}" /></span>
						@endif
						@if($coupon->mycoupons->coupon_pickup_delivery != '')
							<span class="discount_tag">{{$coupon->mycoupons->discount_1}}%</span>
						@endif
						@if (array_intersect($arrCheck, $typeArr))
							<span class="free_tag">FREE</span>
						@endif
					</div>
					<h4>{{$coupon->mycoupons->product_name}}</h4>
					<span class="date">Valid Till : {{$expire_date}} </span>
					
					</div>
					<div class="col-md-5 my_coupons_featured_blk">
						<div class="featured_img"><img src="{{$photo}}" class="img-fluid" /></div>
					</div>
				</div>
				<div class="borderdiv my_coupon"></div>
				<div class="row mb-3 section_bottom">
					<div class="col-md-9 my_coupons_featured_blk">
						<h5>{{$coupon->store->first_name." ".$coupon->store->last_name }}</h5>
					</div>
					<div class="col-md-3 my_coupons_featured_blk">
						@if(Auth::user())
								<a href="#"  id="purchase_coupon" data-id="{{$coupon->id}}" class="my_coupon_purchase">View</a>
						@else
								<a href="#" data-toggle="modal" data-target="#formmodal" class="my_coupon_purchase">View</a>
						@endif
					</div>
					</div>
			</div>
		</div>
			@endif
		@endforeach
		
		@else
		
		<div class="storeblk" style="width:100%">No result found.</div>
		@endif
</div>
<div class="row mt-3 pt-3 tabcontent my_coupon_div" id="Verlopen" style="display:none;">
		@if(isset($coupons) && !empty($coupons) && $total > 0)
			@foreach($coupons as $coupon)
			@php
				$typeArr = array();
				$typeArr = explode(',', $coupon->coupon_display);
				$arrCheck = [1, 2];
			@endphp
		@if(isset($coupon->mycoupons->id) && $coupon->mycoupons->id != "" && $coupon->mycoupons->coupon_end_time < $currentTime)
		@php
			$photo =  coupon_image($coupon->coupon_id);
			$pickup_delivery = $coupon->coupon_pickup_delivery == 1 ? "Pickup" : "Deliver";
			$expire_date = date("d M, Y",$coupon->coupon_end_time);
			$expire_time = date("h:i a",$coupon->coupon_end_time);
		@endphp 
		<div class="col-md-6 featured_blk">
			<div class="featured_blkdiv expired">
				<div class="row pt-3">
				<div class="col-md-7 mt-3 my_coupons_featured_blk">
				<div class="image_tags my_coupons">
						@if(in_array("3", $typeArr))
							<span class="premium_tag"><img src="{{asset('frontend/images/premium.png')}}" /></span>
						@endif
						@if($coupon->mycoupons->coupon_pickup_delivery != '')
							<span class="discount_tag">{{$coupon->mycoupons->discount_1}}%</span>
						@endif
						@if (array_intersect($arrCheck, $typeArr))
							<span class="free_tag">FREE</span>
						@endif
					</div>
				<h4>{{$coupon->mycoupons->product_name}}</h4>
				<span class="expired_coupon_date">EXPIRED</span>
				
				</div>
				<div class="col-md-5 my_coupons_featured_blk">
					<div class="featured_img"><img src="{{$photo}}" class="img-fluid" /></div>
				</div>
				</div>
				<div class="borderdiv my_coupon"></div>
				<div class="row mb-3 section_bottom">
					<div class="col-md-9 my_coupons_featured_blk">
						<h5>{{$coupon->store->first_name." ".$coupon->store->last_name }}</h5>
					</div>
					<div class="col-md-3 my_coupons_featured_blk">
						@if(Auth::user())
							<a href="#"  id="purchase_coupon" data-id="{{$coupon->id}}" class="my_coupon_purchase">View</a>
						@else
							<a href="#" data-toggle="modal" data-target="#formmodal" class="my_coupon_purchase">View</a>
						@endif
					</div>
				</div>
			</div>
			<div id="expired_overlay"></div>
		</div>

		@endif
	@endforeach
	
	@else
	
	<div class="storeblk" style="width:100%">No result found.</div>
	@endif
	</div>

@else
	<div class="storeblk">No Records Found.</div>
@endif
<script>
	$(document).ready(function(){
		$( '.getcpnbtn' ).click(function() {
		$( '.modal.getcpn_modal2' ).css('background-color', 'rgba(0,0,0,0.2)');
		});	
		
	});
	function openTab(evt, status) {
	var i, tabcontent, tablinks;
	tabcontent = document.getElementsByClassName("tabcontent");
	for (i = 0; i < tabcontent.length; i++) {
		tabcontent[i].style.display = "none";
	}
	tablinks = document.getElementsByClassName("tablinks");
	for (i = 0; i < tablinks.length; i++) {
		tablinks[i].className = tablinks[i].className.replace(" active", "");
	}
	document.getElementById(status).style.display = "flex";
	evt.currentTarget.className += " active";
	}
	
</script>