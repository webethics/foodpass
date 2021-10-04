@php 
	$currentTime = strtotime('now');
@endphp
@if(isset($booking) && !empty($booking))
	@foreach($booking as $data)
	@if(isset($data->product_name) && $data->product_name != "" && $data->coupon_end_time >= $currentTime )
	<tr>
		<td>{{$data->first_name}}</td>
		<td>{{$data->customer_id}}</td>
		<td>#{{$data->order_number}}</td>
		<td>{{$data->product_name}}</td>
		<td>{{date("d M Y, H:i:sA", strtotime($data->created_at))}}</td>
		@if($data->confirm_status != 0)
			<td>{{date("d M Y, H:i:sA", strtotime($data->updated_at))}}</td>
		@else
			<td>-</td>
		@endif
		@if($data->is_show == '1')
			<td>Show</td>
		@else
			<td>No Show</td>
		@endif
		<td class="actionbtns">
			<a href="#" class="scanbtn" data-target="#qr_code" data-toggle="modal">Scan QR</a> 
			<a href="#" class="manualbtn" data-target="#show_noshow" data-toggle="modal" data-id="{{$data->unique_purchase_id}}">Manual</a> 
			<!--a href="/updatebookingstatus/{{$data->unique_purchase_id}}" class="manualbtn">Manual</a-->
		</td>
	 </tr>
	@endif
	@endforeach
@endif
