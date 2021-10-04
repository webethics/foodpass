<?php
use App\Models\User;
?>
<style type="text/css">
.inactiveLink {
   pointer-events: none;
   cursor: default;
   opacity: 0.4;
}
</style>
<tr data-coupon-id="{{ $coupon->id }}" class="user_row_{{$coupon->id}}" >		
	<td id="sno_{{$coupon->id}}">{{(($page_number-1) * 10)+$sno}} 
		<input type="hidden" name="page_number" value="{{$page_number}}" id="page_number_{{$coupon->id}}"/>
		<input type="hidden" name="sno" value="{{$sno}}" id="s_number_{{$coupon->id}}"/>
	</td>
	
	@php
	$get_use = User::where("id",$coupon->user_id)->first();
	$expire_date = date("d M, Y",$coupon->coupon_end_time);
	$expire_time = date("h:i a",$coupon->coupon_end_time);
	$pickup_delivery = $coupon->coupon_pickup_delivery == 1 ? "Pickup" : "Deliver";
	$status = $coupon->is_varified == 1 ? "Enable" : "Disable";

		$disabled = "";
	@endphp
	<?php
	if(time() > $coupon->coupon_end_time){
		$disabled = "inactiveLink";
	}
	?>
	
	<td id="registation_{{$coupon->id}}"><a href="{{url('admin/view-customer/'.$coupon->user_id)}}">{{$get_use->restaurant_name}}</a></td>
	
	<td id="full_name_{{$coupon->id}}">{{$coupon->product_name}}</td>
	
	<td id="email_{{$coupon->id}}">{{$expire_date}} & {{$expire_time}}</td>
	
	<td id="role_id_{{$coupon->id}}">{{$coupon->coupon_price}}</td>
	
	<td id="role_id_{{$coupon->id}}">{{$pickup_delivery}}</td>
	
	<td id="role_id_{{$coupon->id}}">{{$status}}</td>

	<td id="role_id_{{$coupon->id}}">{{$coupon->is_notify}}</td>
	
	<td id="action_{{$coupon->id}}">
		<span class="balance">
			<a id="create_user" class="btn btn-primary {{ $disabled }}"  href="/admin/notify-coupon/{{$coupon->id}}" >Notify</a>
		</span>
	</td>
	
	<td id="action_{{$coupon->id}}">
		<a class = "action view_coupon" href="javascript:void(0);" data-id="{{ $coupon->id }}" title="View Coupon"><i class="simple-icon-eye"></i> </a> 

		<a class="action" href="/admin/edit-coupon/{{$coupon->id}}" data-user_id="{{ $coupon->id }}" title="Edit Coupon"><i class="simple-icon-note"></i> </a> 
		
		<!--<a title="Delete Customer"  data-id="{{ $coupon->id }}" data-confirm_type="complete" data-confirm_message ="Are you sure you want to delete the Customer?"  data-left_button_name ="Yes" data-left_button_id ="delete_coupon" data-left_button_cls="btn-primary" class="open_confirmBox action deleteCustomer"  href="javascript:void(0)" data-coupon_id="{{ $coupon->id }}"><i class="simple-icon-trash"></i></a>-->
	</td>	
</tr>