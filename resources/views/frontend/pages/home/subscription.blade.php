@extends('frontend.creaters.landing.landing')
@section('pageTitle','Subscription')
@section('content')
<style>
.subscribeswithes .subscribe_blk {
    opacity: 0.4;
}
.subscribeswithes .subscribe_blk.currentbox {
    opacity: 1;
}
</style>
         <section class="innerbannersection subscribebannersection">
            <div class="container">
               <div class="innerbanner_cont">
                  <h2 class="wow fadeInUp" data-wow-duration="1500ms">Subscription</h2>
               </div>
            </div>
         </section>
         <section class="innercontent subscribe_section">
            <div class="container p-0">
            <div class="row">
               <div class="col-md-6 subscribe_left subscribeswithes" id="subscribeswitch1">
                  <div class="subscribe_blk redblock ui-selected currentbox" data-id="12">
                     <div class="subscribe_cont">
                        <h4>Annual <br/> First 2 weeks free</h4>
                        <p>€12/year</p>
                     </div>
                     <div class="subscribe_btn">
                        <a href="#">best value</a>
                     </div>
                  </div>
                  <div class="subscribe_blk yellowblock currentbox" data-id="3">
                     <div class="subscribe_cont">
                        <h4>Monthly <br/> First 1 weeks free</h4>
                        <p>€3/month</p>
                     </div>
                     <div class="subscribe_btn">
                        <a href="#">get coupon</a>
                     </div>
                  </div>
                  <ul class="subs_benefits">
                     <h3>Benefits</h3>
                     <li>Unlock the full Foodpass experience.</li>
                     <li>A new dishes everyday.</li>
                     <li>Get food delivery on your door.</li>
                     <li>Order food, Get food and enjoy food.</li>
                  </ul>
               </div>
               <div class="col-md-6 subscribe_right">
                  <div class="forumleft">
					@if(isset($subscription) && !empty($subscription) && $subscription->status == 1 && $subscription->cancel_status == 0)
						<p>You have already subscribed.</p>
						<form class="forumform" action = "{{ route('user.cancelsubscription') }}" method="post" enctype="multipart/form-data">
						{{ csrf_field() }}
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>Plan</th> 
									<th>Amount</th>
									<th>Subscription Expired</th>
								</tr> 
							</thead>						
							<tbody>
							<tr> 
							
								
							
							@if($subscription->amount == "12.00")
							@php
									$Plan = "Annual";
									$amount = $subscription->amount;
									$expire = $subscription->updated_at->addYear()->format('d F Y');
							@endphp
							@else
							@php
								$Plan = "Monthly";
								$amount = $subscription->amount;
								$expire = $subscription->updated_at->addMonth()->format('d F Y');
							@endphp
							@endif
								<td>{{ $Plan }}</td> 
								<td>€{{ $amount }}</td> 
								<td>{{ $expire }}</td> 
							</tr>
							</tbody>
						</table>
						
							<input type = "hidden" name="subscription_id" id="subscription_id" value = "{{$subscription->subscription_id}}">
							
							<input type = "hidden" name="customer_id" id="customer_id" value = "{{$subscription->customer_id}}">
							
							<input type = "hidden" name="user_id" id="user_id" value = "{{$subscription->user_id}}">
						
						<button class="btn btn-danger btn-sm px-4" type="submit">Cancel your subscription</button>
						</form>
					@else
						@if(isset($subscription) && !empty($subscription) && $subscription->status == 0 && $subscription->cancel_status == 1)
								@if($subscription->amount == "12.00")
									@php
											$Plan = "Annual";
											$amount = $subscription->amount;
											$expire = $subscription->updated_at->addYear()->format('d F Y');
									@endphp
								@else
									@php
										$Plan = "Monthly";
										$amount = $subscription->amount;
										$expire = $subscription->updated_at->addMonth()->format('d F Y');
									@endphp
								@endif
								<p>Your Subscription is cancelled but you are enjoy the service till  {{ $expire }}.</p>
						@endif
						<form class="forumform" action = "{{ route('user.buysubscription') }}" method="post" enctype="multipart/form-data">
						 {{ csrf_field() }}
							<h2>Subscription</h2>
							<div class="row">
							   <div class="col-md-6 form-group">
								  <label>First Name</label>
								  <input type="text" class="form-control" placeholder="" value="{{ $user->first_name }}" name="first_name">
							   </div>
							   <div class="col-md-6 form-group">
								  <label>Last Name</label>
								  <input type="text" class="form-control" placeholder="" value="{{ $user->last_name }}" name="last_name">
							   </div>
							</div>
							<div class="row">
							   <div class="col-md-12 form-group">
								  <label>Address</label>
								  <input type="text" class="form-control" placeholder="" value="{{ $user->address }}" name="address" autocomplete="on" id= "address">
							   </div>
							</div>
							<div class="row">
							   <div class="col-md-6 form-group">
								  <label>Postcode</label>
								  <input type="text" class="form-control" placeholder="" value="{{ $user->post_code }}" name="postcode" id = "post_code">
							   </div>
							   <div class="col-md-6 form-group">
								  <label>City</label>
								  <input type="text" class="form-control" id = "city" placeholder="" value="{{ $user->city }}" name="city">
							   </div>
							</div>
							<div class="row">
							   <div class="col-md-12 form-group">
								  <label>Email</label>
								  <input type="email" class="form-control" placeholder="" value="{{ $user->email }}" name="email" disabled>
								  <input type="hidden" class="form-control" placeholder="" value="{{ $user->email }}" name="hiddenemail">
							   </div>
							</div>
							<div class="row">
							   <div class="col-md-6 form-group">
								  <label>Phone</label>
								  <input type="text" class="form-control" placeholder="" value="{{ $user->mobile_number }}" name="phone">
							   </div>
							   <div class="col-md-6 form-group">
								  <label>IBAN</label>
								  <input type="text" class="form-control" placeholder="" value="" name="iban">
							   </div>
							</div>
							 <input type = "hidden" name = "latitude" id = "latitude" value = "{{ $user->latitude }}">
							 <input type = "hidden" name = "longitude" id = "longitude" value = "{{ $user->longitude }}">
							 <input type = "hidden" name = "amount" id = "amount" value = "">
							<div class="custom-control custom-checkbox form-checkbox">
							   <input type="checkbox" class="custom-control-input" id="customControlAutosizing" name="prmissions">
							   <label class="custom-control-label" for="customControlAutosizing">Bank collection permission</label>
							</div>
							<!--onclick="submiBtnClick(event);"-->
							<button type="submit" class="btn text-uppercase" onclick="submiBtnClick(event);">submit</button>
						 </form>
					@endif
                  </div>
               </div>
            </div>
         </section>
 <script src="{{ url('frontend/js/subscription.js')}}" type="text/javascript"></script>
@endsection