<?php
use App\Models\User;

$store         = user_data_by_id($coupon->store_id);
$customer      = user_data_by_id($coupon->customer_id);
$coupondetails = get_coupon($coupon->coupon_id);
$order_no      = $coupon->order_number;
$status        = $coupon->confirm_status == 1 ? "Complete" : "Pending";

?>
<tr data-coupon-id="{{ $coupon->id }}" class="user_row_{{$coupon->id}}" >

	<td id="sno_{{$coupon->id}}">{{(($page_number-1) * 10)+$sno}} 
		<input type="hidden" name="page_number" value="{{$page_number}}" id="page_number_{{$coupon->id}}"/>
		<input type="hidden" name="sno" value="{{$sno}}" id="s_number_{{$coupon->id}}"/>
	</td>
	
	<td><a href="{{url('admin/view-customer/'.$coupon->store_id)}}">{{ $store->restaurant_name }}</a></td>
	
	<td><a href="{{url('admin/view-customer/'.$coupon->customer_id)}}">{{ $customer->first_name }} {{ $customer->last_name }}</a></td>
	
	<td>{{ $order_no }}</td>
	
	<td>{{ $coupondetails->product_name }}</td>

	<td>{{date("d M Y, H:i:sA", strtotime($coupon->created_at))}}</td>
	@if($coupon->confirm_status != 0)
		<td>{{date("d M Y, H:i:sA", strtotime($coupon->updated_at))}}</td>
	@else
		<td>-</td>
	@endif
	
	<td>{{ $status }}</td>
</tr>