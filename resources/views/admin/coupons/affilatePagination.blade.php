<table class="table table-hover mb-0">
	<thead class="bg-primary">
		<tr>
		<th scope="col">ID</th>
		<th scope="col">Customer Name</th>
		<th scope="col">Email</th>
		<th scope="col">Customer ID</th>
		<th scope="col">Affilate Count</th>
		</tr>
	</thead>
	<tbody>
	 @if(is_object($affilate) && !empty($affilate) && $affilate->count())
		 @php $sno = 1;$sno_new = 0  @endphp
		
	  @foreach($affilate as $key => $coupon)
		@include('admin.coupons.affilateSingleRow')
		@php $sno++ @endphp
	 @endforeach
 @else
<tr><td colspan="7" class="error" style="text-align:center">No Data Found.</td></tr>
 @endif	
		
	</tbody>
</table> 
	<!------------ Pagination -------------->
		@if(is_object($affilate) && !empty($affilate) && $affilate->count()) 
		 {{ $affilate->render() }}
		 @endif	