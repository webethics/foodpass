<table class="table table-hover mb-0">
	<thead class="bg-primary">
		<tr>
		<th scope="col">ID</th>
		<th scope="col">Store Name</th>
		<th scope="col">Coupon Name</th>
		<th scope="col">Expire date & time</th>
		<th scope="col">Current Price</th>
		<th scope="col">Pickup/Delivery</th>
		<th scope="col">Status</th>
		<th scope="col">Is_notify</th>
		<th scope="col">Notification</th>
		<th scope="col">Action</th>
		</tr>
	</thead>
	<tbody>
	 @if(is_object($coupons) && !empty($coupons) && $coupons->count())
		 @php $sno = 1;$sno_new = 0  @endphp
		
	  @foreach($coupons as $key => $coupon)
		@include('admin.coupons.couponsSingleRow')
		@php $sno++ @endphp
	 @endforeach
 @else
<tr><td colspan="7" class="error" style="text-align:center">No Data Found.</td></tr>
 @endif	
		
	</tbody>
</table> 
	<!------------ Pagination -------------->
		@if(is_object($coupons) && !empty($coupons) && $coupons->count()) 
		 {{ $coupons->render() }}
		 @endif	