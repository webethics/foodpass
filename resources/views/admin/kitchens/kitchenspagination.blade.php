<table class="table table-hover mb-0">
	<thead class="bg-primary">
		<tr>
		<th scope="col">ID</th>
		<th scope="col">Kitchen Name</th>
		<th scope="col">Status</th>
		<th scope="col">Actions</th>
		</tr>
	</thead>
	<tbody>
	 @if(is_object($kitchens) && !empty($kitchens) && $kitchens->count())
		 @php $sno = 1;$sno_new = 0  @endphp
		
	  @foreach($kitchens as $key => $singlekitchen)
		@include('admin.kitchens.kitchenssinglerow')
		@php $sno++ @endphp
	 @endforeach
 @else
<tr><td colspan="7" class="error" style="text-align:center">No Data Found.</td></tr>
 @endif	
		
	</tbody>
</table> 
	<!------------ Pagination -------------->
		@if(is_object($kitchens) && !empty($kitchens) && $kitchens->count()) 
		 {{ $kitchens->render() }}
		 @endif	