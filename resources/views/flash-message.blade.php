@if ($message = Session::get('success'))
<div class="alert alert-success alert-block custom-alert">
<div class="alert-wrap">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        {{ $message }}
</div>		
</div>
@endif

@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block custom-alert">
<div class="alert-wrap">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        {{ $message }}
</div>	
</div>
@endif

@if ($message = Session::get('warning'))
<div class="alert alert-warning alert-block custom-alert">
<div class="alert-wrap">
	<button type="button" class="close" data-dismiss="alert">×</button>	
	{{ $message }}
</div>	
</div>
@endif


@if ($message = Session::get('info'))
<div class="alert alert-info alert-block custom-alert">
<div class="alert-wrap">
	<button type="button" class="close" data-dismiss="alert">×</button>	
	{{ $message }}
</div>	
</div>
@endif

<!--
@if ($errors->any())
<div class="alert alert-danger">
	<button type="button" class="close" data-dismiss="alert">×</button>	
	Please check the form below for errors
</div>
@endif-->