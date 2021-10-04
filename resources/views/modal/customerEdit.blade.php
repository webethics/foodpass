<link rel="stylesheet" href="{{ url('css/multiselect.css')}}" type="text/css" />
<style>
.ms-options > ul, .ms-options > ul > li {
    list-style: none;
    margin: 0;
    padding: 0;
}
.ms-options-wrap > .ms-options > ul label{
	padding-left:22px !important;
}
</style>
<div class="modal-dialog" role="document">
	<div class="modal-content">
	<div class="modal-header py-1">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
	<div class="modal-body">
	<form action="{{ url('update-customer/') }}/{{ $user->id }}" method="POST" id="updateUser" >
	 @csrf
		<?php
			// echo "<pre>";print_r($user);die("HERE");
		?>
		<div class="form-group form-row-parent">
			<label class="col-form-label">{{ trans('global.first_name') }}<em>*</em></label>
			<div class="d-flex control-group">
				<input type="text" name="first_name" value="{{$user->first_name}}" class="form-control" placeholder="First Name">									
			</div>	
			<div class="first_name_error errors"></div>	
		</div>
		
		
	
		<div class="form-group form-row-parent">
			<label class="col-form-label">{{ trans('global.last_name') }}<em>*</em></label>
			<div class="d-flex control-group">
				<input type="text" name="last_name" value="{{$user->last_name}}" class="form-control" placeholder="Last Name">									
			</div>	
			<div class="last_name_error errors"></div>	
		</div>
		
		
		
		<div class="form-group form-row-parent">
		<label class="col-form-label">{{ trans('global.email') }}</label>
		<div class="d-flex control-group">
		<input type="email" name="email" disabled="disabled" value="{{$user->email}}" readonly class="form-control" placeholder="{{ trans('global.email') }}">								
		</div>								
		</div>	
	
	
		@if($user->role_id == 3)
			@php
				$coupon_status = $user->is_store_coupons_enabled_from_admin;
			@endphp
			@if(isset($user->restaurant_kitchens) && !empty($user->restaurant_kitchens))
				@php
					$kitchens = explode(",",$user->restaurant_kitchens);
				@endphp
			@else
				@php
					$kitchens = array();
				@endphp
			@endif
			
			
			@if(isset($user->order_options) && !empty($user->order_options))
				@php
					$order_options = explode(",",$user->order_options);
				@endphp
			@else
				@php
					$order_options = array();
				@endphp
			@endif
			<div class="form-group form-row-parent">
				<label class="col-form-label">Kitchens<em>*</em></label>
				<select name="restaurant_kitchens[]" multiple id="restaurant_kitchens" class="form-control">
					@foreach($Kitchens as $val)
						<option value="{{$val->id}}" <?php if(in_array($val->id, $kitchens)) echo "selected"; ?>>{{$val->name}}</option>	
					@endforeach
				  <!--<option value="1" <?php //if(in_array("1", $kitchens)) echo "selected"; ?>>Fish</option>
				  <option value="2" <?php //if(in_array("2", $kitchens)) echo "selected"; ?>>Burger</option>
				  <option value="3" <?php //if(in_array("3", $kitchens)) echo "selected"; ?>>Pizza</option>
				  <option value="4" <?php //if(in_array("4", $kitchens)) echo "selected"; ?>>Sushi</option>
				  <option value="5" <?php //if(in_array("5", $kitchens)) echo "selected"; ?>>Chicken</option>
				  <option value="6" <?php //if(in_array("6", $kitchens)) echo "selected"; ?>>Afghan</option>
				  <option value="7" <?php //if(in_array("7", $kitchens)) echo "selected"; ?>>American</option>
				  <option value="8" <?php //if(in_array("8", $kitchens)) echo "selected"; ?>>100% Halal</option>
				  <option value="9" <?php //if(in_array("9", $kitchens)) echo "selected"; ?>>Argentinian</option>
				  <option value="10" <?php //if(in_array("10", $kitchens)) echo "selected"; ?>>Sandwiches</option>
				  <option value="11" <?php //if(in_array("11", $kitchens)) echo "selected"; ?>>Burgers</option>
				  <option value="12" <?php //if(in_array("12", $kitchens)) echo "selected"; ?>>Chinese</option>
				  <option value="13" <?php //if(in_array("13", $kitchens)) echo "selected"; ?>>Drinks</option>
				  <option value="14" <?php //if(in_array("14", $kitchens)) echo "selected"; ?>>Doner</option>
				  <option value="15" <?php //if(in_array("15", $kitchens)) echo "selected"; ?>>Egyptian</option>
				  <option value="16" <?php //if(in_array("16", $kitchens)) echo "selected"; ?>>Falafel</option>
				  <option value="17" <?php //if(in_array("17", $kitchens)) echo "selected"; ?>>French</option>
				  <option value="18" <?php //if(in_array("18", $kitchens)) echo "selected"; ?>>Pasta</option>-->
				</select>
			</div>
			
			<div class="form-group form-row-parent">
				<label class="col-form-label">Order Options<em>*</em></label>
				<select name="order_options[]" multiple id="order_options" class="form-control">
				  <option value="1" <?php if(in_array("1", $order_options)) echo "selected"; ?>>Website</option>
				  <option value="2" <?php if(in_array("2", $order_options)) echo "selected"; ?>>Call</option>
				  <option value="3" <?php if(in_array("3", $order_options)) echo "selected"; ?>>WhatsApp</option>
				</select>
			</div>

			<div class="form-group form-row-parent">
				<label class="col-form-label">Coupons Status<em>*</em></label>
				<select name="coupon_status" id="coupon_status" class="form-control">
					<option value="1" <?php if(isset($coupon_status) && $coupon_status == 1) echo "selected"; ?>>Enabled</option>
					<option value="0" <?php if(isset($coupon_status) && $coupon_status == 0) echo "selected"; ?>>Disabled</option>
				</select>
			</div>

		@endif
		
		
		
		<div class="form-row mt-4">
		<div class="col-md-12">
		<input id ="user_id" class="form-check-input" type="hidden" value="{{$user->id}}">
		<button type="submit" class="btn btn-primary default btn-lg mb-2 mb-sm-0 mr-2 col-12 col-sm-auto">{{ trans('global.submit') }}</button>
		<div class="spinner-border text-primary request_loader" style="display:none"></div>
		</div>
		</div>
		
		</form>

				</div>
			</div>
		</div>
		
		<script src="{{ asset('js/multiselect.js')}}"></script>	
		
		<script>
			$('#restaurant_kitchens').multiselect({
				columns: 1,
				placeholder: 'Select Restaurant kitchens',
				search: true,
				selectAll: true
			});
			
			$('#order_options').multiselect({
				columns: 1,
				placeholder: 'Select Restaurant Order Options',
				search: true,
				selectAll: true
			});

			
		</script>