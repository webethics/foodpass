<?php
use App\Models\User;
use App\Models\Setting;

$requestData = Setting::where('id',1)->first();
$affilate_count = affilate_count($coupon->id);

if(isset($requestData) && !empty($requestData)){
	$count = $affilate_count*$requestData->affilate;	
}else{
	$count = $affilate_count;	
}

?>
<tr data-coupon-id="{{ $coupon->id }}" class="user_row_{{$coupon->id}}" >		
	<td id="sno_{{$coupon->id}}">{{(($page_number-1) * 10)+$sno}} 
		<input type="hidden" name="page_number" value="{{$page_number}}" id="page_number_{{$coupon->id}}"/>
		<input type="hidden" name="sno" value="{{$sno}}" id="s_number_{{$coupon->id}}"/>
	</td>
	
	<td>{{ $coupon->first_name }} {{ $coupon->last_name }}</td>
	
	<td>{{ $coupon->email }}</td>
	
	<td>{{ $coupon->customer_id }}</td>
	
	<td>&euro; {{ $count }}</td>
</tr>