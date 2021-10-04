<table class="table table-hover mb-0">
	<thead class="bg-primary">
		<tr>
		<th scope="col">ID</th>
		<th scope="col">Store Name</th>
		<th scope="col">Client Name</th>
		<th scope="col">Order Number</th>
		<th scope="col">Coupon Name</th>
		<th scope="col">Purchased At</th>
		<th scope="col">Completed At</th>
		<th scope="col">Status</th>
		</tr>
	</thead>
	<tbody>
	 @if(is_object($purcoupons) && !empty($purcoupons) && $purcoupons->count())
		 @php $sno = 1;$sno_new = 0  @endphp
		
	  @foreach($purcoupons as $key => $coupon)
		@include('admin.coupons.purchasecouponsinglerow')
		@php $sno++ @endphp
	 @endforeach
 @else
<tr><td colspan="7" class="error" style="text-align:center">No Data Found.</td></tr>
 @endif	
		
	</tbody>
</table> 
	<!------------ Pagination -------------->
		@if(is_object($purcoupons) && !empty($purcoupons) && $purcoupons->count()) 
		 {{ $purcoupons->render() }}
		 @endif	