
<tr data-singlekitchen-id="{{ $singlekitchen->id }}" class="user_row_{{$singlekitchen->id}}" >		
	<td id="sno_{{$singlekitchen->id}}">{{(($page_number-1) * 10)+$sno}} 
		<input type="hidden" name="page_number" value="{{$page_number}}" id="page_number_{{$singlekitchen->id}}"/>
		<input type="hidden" name="sno" value="{{$sno}}" id="s_number_{{$singlekitchen->id}}"/>
	</td>
	
	<td>{{ $singlekitchen->name }} </td>

	<td>
		@if($singlekitchen->status == "1")
			Enable
		@else
			Disable
		@endif
	</td>
	
	<td>
		<a class="action editKitchen" href="javascript:void(0)" data-user_id="{{ $singlekitchen->id }}" title="Edit Kitchen"><i class="simple-icon-note"></i> </a> 
	</td>
	
</tr>